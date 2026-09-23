<?php
/**
 * common/schema-faq.php
 * ---------------------------------------------------------------------------
 * Single source of truth for FAQPage structured data.
 *
 * The page output is buffered from common/header.php and released in
 * common/footer.php. Just before the buffer is released we read the FAQ
 * accordion that is already on the page and print a FAQPage JSON-LD block
 * built from exactly that text, so the schema can never drift away from what
 * the visitor sees.
 *
 * Supported accordion markups (all of them are in use on this site):
 *   .faq-item      >  .faq-q            /  .faq-a
 *   .gnc-faq-item  >  summary           /  .gnc-faq-answer
 *   .accordion-item>  .accordion-button /  .accordion-body
 *
 * Only accordions that live inside a FAQ container (a class containing "faq")
 * or inside a section headed "Frequently Asked ..." are picked up, so course
 * accordions and other non-FAQ accordions are never mistaken for questions.
 */

if (!function_exists('gnc_faq_buffer_start')) {

    function gnc_faq_buffer_start()
    {
        // A page can opt out (e.g. one that captures the header itself).
        if (defined('GNC_FAQ_DISABLE')) {
            return;
        }
        if (isset($GLOBALS['gnc_faq_ob_level'])) {
            return;
        }
        ob_start();
        $GLOBALS['gnc_faq_ob_level'] = ob_get_level();
    }

    /** Collapse whitespace and trim, the way a reader sees the text. */
    function gnc_faq_text($node)
    {
        if (!$node) {
            return '';
        }
        $text = preg_replace('/\s+/u', ' ', $node->textContent ?? '');
        $text = trim($text);
        // Drop the "+" / "-" / chevron glyph some accordions render inside the button.
        $text = preg_replace('/[\s\x{00A0}]*[+\-\x{2212}\x{25BC}\x{25B2}\x{203A}\x{2039}]+$/u', '', $text);
        // Drop list numbering such as "Q1." / "Q1)" / "1." / "1)" at the front.
        $text = preg_replace('/^(?:Q\s*)?\d{1,2}\s*[.)\-:]\s+/u', '', $text);
        // Drop a bare "Q:" / "A:" prefix.
        $text = preg_replace('/^[QA]\s*[:.]\s+/u', '', $text);
        return trim($text);
    }

    /** XPath fragment that matches one CSS class name exactly. */
    function gnc_faq_has_class($class)
    {
        return "contains(concat(' ', normalize-space(@class), ' '), ' {$class} ')";
    }

    function gnc_faq_first($xp, $query, $ctx)
    {
        $found = $xp->query($query, $ctx);
        return ($found && $found->length) ? $found->item(0) : null;
    }

    /**
     * Pull question/answer pairs out of the rendered HTML.
     *
     * @return array<int, array{q:string, a:string}>
     */
    function gnc_faq_extract($html)
    {
        if (stripos($html, 'faq') === false) {
            return [];
        }
        if (!class_exists('DOMDocument')) {
            return [];
        }

        $previous = libxml_use_internal_errors(true);
        $dom      = new \DOMDocument();
        $loaded   = $dom->loadHTML(
            '<!DOCTYPE html><html><head><meta charset="utf-8"></head><body>' . $html . '</body></html>',
            LIBXML_NOWARNING | LIBXML_NOERROR
        );
        libxml_clear_errors();
        libxml_use_internal_errors($previous);

        if (!$loaded) {
            return [];
        }

        $xp = new \DOMXPath($dom);

        // 1. Containers that are explicitly FAQ containers.
        $containers = [];
        $byClass = $xp->query("//*[contains(translate(@class,'ABCDEFGHIJKLMNOPQRSTUVWXYZ','abcdefghijklmnopqrstuvwxyz'), 'faq') or contains(translate(@id,'ABCDEFGHIJKLMNOPQRSTUVWXYZ','abcdefghijklmnopqrstuvwxyz'), 'faq')]");
        foreach ($byClass as $node) {
            $containers[] = $node;
        }

        // 2. Sections headed "Frequently Asked ..." even if the class says nothing.
        $byHeading = $xp->query("//*[self::h1 or self::h2 or self::h3 or self::h4][contains(translate(., 'ABCDEFGHIJKLMNOPQRSTUVWXYZ', 'abcdefghijklmnopqrstuvwxyz'), 'frequently asked') or contains(translate(., 'ABCDEFGHIJKLMNOPQRSTUVWXYZ', 'abcdefghijklmnopqrstuvwxyz'), 'faq')]");
        foreach ($byHeading as $heading) {
            $section = $heading;
            for ($i = 0; $i < 4 && $section->parentNode instanceof \DOMElement; $i++) {
                $section = $section->parentNode;
            }
            $containers[] = $section;
        }

        if (!$containers) {
            return [];
        }

        $pairs = [];
        $seen  = [];

        $push = static function ($q, $a) use (&$pairs, &$seen) {
            $q = trim($q);
            $a = trim($a);
            $len = function_exists('mb_strlen') ? 'mb_strlen' : 'strlen';
            if ($q === '' || $a === '' || $len($q) < 8 || $len($a) < 8) {
                return;
            }
            $key = function_exists('mb_strtolower') ? mb_strtolower($q) : strtolower($q);
            if (isset($seen[$key])) {
                return;
            }
            $seen[$key] = true;
            $pairs[]    = ['q' => $q, 'a' => $a];
        };

        foreach ($containers as $container) {
            // -- .faq-item > .faq-q / .faq-a -----------------------------------
            foreach ($xp->query('.//*[' . gnc_faq_has_class('faq-item') . ']', $container) as $item) {
                $q = gnc_faq_first($xp, './/*[' . gnc_faq_has_class('faq-q') . ']', $item)
                    ?: gnc_faq_first($xp, './/*[' . gnc_faq_has_class('faq-question') . ']', $item);
                $a = gnc_faq_first($xp, './/*[' . gnc_faq_has_class('faq-a') . ']', $item)
                    ?: gnc_faq_first($xp, './/*[' . gnc_faq_has_class('faq-answer') . ']', $item);
                if ($q && $a) {
                    $push(gnc_faq_text($q), gnc_faq_text($a));
                }
            }

            // -- <details class="gnc-faq-item"> --------------------------------
            foreach ($xp->query('.//*[' . gnc_faq_has_class('gnc-faq-item') . ']', $container) as $item) {
                $q = gnc_faq_first($xp, './/summary', $item);
                $a = gnc_faq_first($xp, './/*[' . gnc_faq_has_class('gnc-faq-answer') . ']', $item);
                if ($q && $a) {
                    $push(gnc_faq_text($q), gnc_faq_text($a));
                }
            }

            // -- .paa-item > .paa-question + <p> --------------------------------
            foreach ($xp->query('.//*[' . gnc_faq_has_class('paa-item') . ']', $container) as $item) {
                $q = gnc_faq_first($xp, './/*[' . gnc_faq_has_class('paa-question') . ']', $item);
                $a = gnc_faq_first($xp, './/p', $item);
                if ($q && $a) {
                    $push(gnc_faq_text($q), gnc_faq_text($a));
                }
            }

            // -- Microdata: [itemprop=mainEntity][itemtype=.../Question] --------
            foreach ($xp->query(".//*[@itemprop='mainEntity']", $container) as $item) {
                $q = gnc_faq_first($xp, ".//*[@itemprop='name']", $item);
                $a = gnc_faq_first($xp, ".//*[@itemprop='text']", $item);
                if ($q && $a) {
                    $push(gnc_faq_text($q), gnc_faq_text($a));
                }
            }

            // -- Bootstrap .accordion-item -------------------------------------
            foreach ($xp->query('.//*[' . gnc_faq_has_class('accordion-item') . ']', $container) as $item) {
                $q = gnc_faq_first($xp, './/*[' . gnc_faq_has_class('accordion-button') . ']', $item);
                $a = gnc_faq_first($xp, './/*[' . gnc_faq_has_class('accordion-body') . ']', $item);
                if ($q && $a) {
                    $push(gnc_faq_text($q), gnc_faq_text($a));
                }
            }
        }

        // -- Heading-run markup: "Frequently Asked Questions" followed by
        //    <h3>/<h4> question + <p> answer pairs (no wrapper element). -------
        foreach ($byHeading as $heading) {
            $node = $heading->nextSibling;
            $steps = 0;
            while ($node && $steps < 120) {
                $steps++;
                if (!($node instanceof \DOMElement)) {
                    $node = $node->nextSibling;
                    continue;
                }
                $tag = strtolower($node->nodeName);
                if ($tag === 'h1' || $tag === 'h2') {
                    break; // next major section
                }
                if ($tag === 'h3' || $tag === 'h4' || $tag === 'h5') {
                    $answer = $node->nextSibling;
                    while ($answer && !($answer instanceof \DOMElement)) {
                        $answer = $answer->nextSibling;
                    }
                    if ($answer instanceof \DOMElement && strtolower($answer->nodeName) === 'p') {
                        $push(gnc_faq_text($node), gnc_faq_text($answer));
                    }
                }
                $node = $node->nextSibling;
            }
        }

        return $pairs;
    }

    /** Build the FAQPage JSON-LD script tag for the given pairs. */
    function gnc_faq_schema($faqs)
    {
        if (!$faqs) {
            return '';
        }

        $items = array_map(static function ($f) {
            return [
                '@type'          => 'Question',
                'name'           => $f['q'],
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text'  => $f['a'],
                ],
            ];
        }, $faqs);

        $json = json_encode(
            [
                '@context'   => 'https://schema.org',
                '@type'      => 'FAQPage',
                'mainEntity' => $items,
            ],
            JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE
        );

        if ($json === false) {
            return '';
        }

        return "\n<script type=\"application/ld+json\">" . $json . "</script>\n";
    }

    /** Release the buffered page and append the generated FAQPage block. */
    function gnc_faq_buffer_end()
    {
        // Only unwrap the buffer this file opened, and only if it is still the
        // innermost one - otherwise we would swallow somebody else's output.
        if (!isset($GLOBALS['gnc_faq_ob_level'])) {
            return;
        }
        if (ob_get_level() !== $GLOBALS['gnc_faq_ob_level']) {
            return;
        }
        unset($GLOBALS['gnc_faq_ob_level']);

        $html = ob_get_clean();
        if ($html === false) {
            return;
        }

        echo $html;

        try {
            $faqs = gnc_faq_extract($html);
        } catch (\Exception $e) {
            $faqs = [];
        } catch (\Error $e) {
            $faqs = [];
        }

        if ($faqs) {
            echo gnc_faq_schema($faqs);
        }
    }
}
