<?php
// Calculate the base URL dynamically to handle subdirectories
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
$host = $_SERVER['HTTP_HOST'];
$script_path = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
$base_url = rtrim($protocol . "://" . $host . $script_path, '/') . '/';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Campus Events & Activities - Guru Nanak College Dehradun</title>

    <!-- Clean professional font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,400;0,700;0,800;0,900;1,400&display=swap" rel="stylesheet">

    <style>
        :root {
            --gnc-red: rgb(251 123 28);
            --gnc-blue: rgb(3 175 255);
            --text-dark: #1e293b;
            --text-gray: #64748b;
            --card-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        }

        body {
            background-color: #f3f5f7;
            color: #333;
            line-height: 1.5;
        }

        
        .site-wrap {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 30px 20px;
        }


        
        .events-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin-bottom: 50px;
            width: 100%;
        }

        /* Responsive adjustments */
        @media (max-width: 1024px) {
            .events-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 650px) {
            .events-grid {
                grid-template-columns: 1fr;
            }

        }

       
        .event-card {
            background: #fff;
            border-radius: 0;
            box-shadow: var(--card-shadow);
            display: flex;
            flex-direction: column;
            text-decoration: none;
            color: inherit;
            height: 100%;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            overflow: hidden;
        }

        .event-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
        }

        .image-box {
            width: 100%;
            aspect-ratio: 1 / 1;
            overflow: hidden;
        }

        .image-box img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            object-position: center;
            background: #000;
        }

        .content-box {
            padding: 20px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .event-title {
            font-size: 1rem;
            font-weight: 800;
            text-transform: uppercase;
            color: var(--text-dark);
            margin: 0 0 10px 0;
            line-height: 1.3;
        }

        .event-desc {
            font-size: 0.95rem;
            color: var(--text-gray);
            line-height: 1.6;
            margin: 0 0 15px 0;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .event-date {
            font-size: 0.85rem;
            color: var(--gnc-red);
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 6px;
            margin-bottom: 12px;
            text-transform: uppercase;
        }

        .event-date svg {
            width: 14px;
            height: 14px;
            fill: currentColor;
        }

        .read-more-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 10px 20px;
            background: var(--gnc-blue);
            color: #fff;
            text-decoration: none;
            font-size: 0.85rem;
            font-weight: 700;
            text-transform: uppercase;
            border-radius: 4px;
            transition: all 0.3s ease;
            margin-top: auto;
            border: 2px solid var(--gnc-blue);
        }

        .read-more-btn:hover {
            background: transparent;
            color: var(--gnc-blue);
        }
    </style>
    <style>
        .pagination-wrapper {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background: transparent;
        }

        .pagination-container {
            width: 100%;
            max-width: 600px;
            height: 120px;
        }

        #paginationSVG {
            width: 100%;
            height: 100%;
            overflow: visible;
            fill: var(--gnc-red);
            stroke: var(--gnc-red);
            stroke-miterlimit: 10;
            stroke-width: 4;
        }

        .dot {
            cursor: pointer;
            fill-opacity: 0.2;
            transition: fill-opacity 0.3s;
        }

        .dot:hover {
            fill-opacity: 0.5;
        }

        .event-card {
            display: none;
            
        }
    </style>
</head>

<body>
    <?php require "common/header.php"; ?>

    <section class="pageBanner-inner">
        <?php
  $hero_img = "upload/gnc-events/gnc-events.webp"; // Default image
if (!empty($all_events) && isset($all_events[0]['image'])) {
    $hero_img = $all_events[0]['image'];
    if (!filter_var($hero_img, FILTER_VALIDATE_URL) && strpos($hero_img, '/') !== 0) {
        $hero_img = $base_url . $hero_img;
    }
}
?>
        <div
            style="background-image: url('<?php echo $hero_img; ?>'); background-repeat: no-repeat; background-size: cover; background-position: center; position: relative; min-height: 450px; display: flex; align-items: center;">
            <div class="pageBanner-inner_in" style="position: relative; z-index: 3; width: 100%;">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8 col-xl-7">
                            <div class="pageBanner-inner__content inner-content head-sm text-md-start">
                                <div class="upper-banner-content">
                                    <h3 class="mb-1 mt-5 text-white">CAMPUS EVENTS<br><small class="text-white">Join us in our vibrant campus life and discover the exciting activities <br>and historical celebrations happening at  Guru Nanak College.</small></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main class="site-wrap">
        <div style="text-align:center; margin-bottom: 50px;">
            <h2 style="text-transform: uppercase; font-weight: 900; font-size: 2rem;">Latest Activities</h2>
        </div>

        <div class="events-grid" id="eventsContainer">
            <?php
$events_file = 'events.json';
$pageSize = 6;
if (file_exists($events_file)) {
    $all_events_raw = json_decode(file_get_contents($events_file), true);
    if ($all_events_raw) {
        $all_events = array_filter($all_events_raw, function ($e) {
            return strpos($e['image'], 'upload/gnc-events/') === 0;
        });
        $all_events = array_values($all_events);
        $totalEvents = count($all_events);
        $totalPages = ceil($totalEvents / $pageSize);

        foreach ($all_events as $index => $event) {
            $pageIndex = floor($index / $pageSize);
            $url = $base_url . "event/" . $event['slug'];
            $displayStyle = ($pageIndex == 0) ? 'flex' : 'none';

            
            $displayDate = preg_replace('/(\d{4})\s+([a-zA-Z]+)\s+(\d{1,2})/', '$3 $2 $1', $event['date']);
?>
                        <a href="<?php echo $url; ?>" class="event-card" data-page="<?php echo $pageIndex; ?>"
                            style="display: <?php echo $displayStyle; ?>;">
                            <div class="image-box">
                                <?php
            $img_src = $event['image'];
            if (!filter_var($img_src, FILTER_VALIDATE_URL) && strpos($img_src, '/') !== 0) {
                $img_src = $base_url . $img_src;
            }
?>
                                <img src="<?php echo $img_src; ?>" alt="<?php echo $event['title']; ?>" loading="lazy">
                            </div>
                            <div class="content-box">
                                <div class="event-date">
                                    <svg viewBox="0 0 24 24">
                                        <path
                                            d="M19 4h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V10h14v10zm0-12H5V6h14v2zm-7 5h5v5h-5v-5z" />
                                    </svg>
                                    <?php echo $displayDate; ?>
                                </div>
                                          <h3 class="event-title">
                                <?php echo $event['title']; ?>
                                </h3>
                                <p class="event-desc"><?php echo $event['shortDescription']; ?></p>
                                <div class="read-more-btn">Read More</div>
                            </div>
                        </a>
                        <?php
        }
    }
}
else {
    $totalPages = 0;
}
?>
        </div>

        <!-- GSAP Pagination Section -->
        <?php if ($totalPages > 1): ?>
            <section class="pagination-wrapper">
                <div class="pagination-container">
                    <svg id="paginationSVG" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 800 200">
                        <?php for ($i = 0; $i < $totalPages; $i++): ?>
                            <circle class="dot" cx="0" cy="0" r="12" data-index="<?php echo $i; ?>" />
                        <?php
    endfor; ?>
                    </svg>
                </div>
            </section>
        <?php
endif; ?>
    </main>

    <!-- GSAP Integration -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const events = document.querySelectorAll('.event-card');
            const dots = document.querySelectorAll('.dot');
            if (dots.length === 0) return;

            gsap.config({ trialWarn: false });

            let select = s => document.querySelector(s),
                toArray = s => gsap.utils.toArray(s),
                mainSVG = select('#paginationSVG'),
                allDots = toArray('.dot'),
                spacerX = 45, // Adjusted for typical spacing
                currentDotId = 0,
                oldDotId = 0,
                mainTl = gsap.timeline({ onComplete: resetPagination }),
                viewbox = mainSVG.getAttribute('viewBox').split(' ').map(x => parseInt(x)),
                sizeObj = { width: viewbox[2], height: viewbox[3] },
                // Center the dots group
                startX = (sizeObj.width / 2) - ((allDots.length - 1) * spacerX / 2),
                mapX = i => startX + (i * spacerX),
                mapDuration = gsap.utils.mapRange(40, 400, 0.4, 0.7);

            function blendEases(startEase, endEase, blender) {
                var parse = function (ease) { return typeof (ease) === "function" ? ease : gsap.parseEase("power4.inOut"); },
                    s = gsap.parseEase(startEase),
                    e = gsap.parseEase(endEase),
                    b = parse(blender);
                return function (v) {
                    var blend = b(v);
                    return s(v) * (1 - blend) + e(v) * blend;
                };
            }

            function resetPagination() {
                allDots.forEach((c, i) => {
                    gsap.set(c, {
                        x: mapX(i),
                        y: sizeObj.height / 2,
                        fillOpacity: i == currentDotId ? 1 : 0.2,
                        rotation: 0
                    });
                });
            }

            function updateCards(pageId) {
                const cardsToHide = Array.from(events).filter(c => c.style.display !== 'none');
                const cardsToShow = Array.from(events).filter(c => c.dataset.page == pageId);

                // Exit animation for current cards
                gsap.to(cardsToHide, {
                    opacity: 0,
                    y: -20,
                    scale: 0.95,
                    duration: 0.3,
                    stagger: 0.05,
                    onComplete: () => {
                        cardsToHide.forEach(c => c.style.display = 'none');
                        cardsToShow.forEach(c => {
                            c.style.display = 'flex';
                            gsap.set(c, { opacity: 0, y: 20, scale: 0.95 });
                        });

                        // Entrance animation for new cards
                        gsap.to(cardsToShow, {
                            opacity: 1,
                            y: 0,
                            scale: 1,
                            duration: 0.5,
                            stagger: 0.1,
                            ease: "back.out(1.7)"
                        });
                    }
                });
            }

            function clickDot(id) {
                if (id === currentDotId) return;

                if (mainTl.isActive()) {
                    mainTl.seek(mainTl.duration()).vars.onComplete();
                }

                updateCards(id);

                oldDotId = currentDotId;
                currentDotId = id;
                let currentDotArray = [allDots[oldDotId], allDots[currentDotId]];
                let distance = mapX(oldDotId) - mapX(currentDotId);
                let originDotId = distance > 0 ? 1 : 0;
                let direction = originDotId ? 1 : -1;
                let origin = `${mapX(currentDotArray[originDotId === 1 ? currentDotId : oldDotId]) + (direction * (Math.abs(distance) / 2))} ${sizeObj.height / 2}`;

                // Fix origin logic: use mid-point between dots
                let midX = (mapX(oldDotId) + mapX(currentDotId)) / 2;
                let customOrigin = `${midX} ${sizeObj.height / 2}`;

                mainTl.to(currentDotArray, {
                    rotation: distance > 0 ? 180 : -180,
                    svgOrigin: customOrigin,
                    duration: mapDuration(Math.abs(distance)),
                    ease: blendEases('sine.in', 'elastic(0.3, 0.6)')
                });
            }

            // Initialize
            resetPagination();

            allDots.forEach((c, i) => {
                c.onclick = e => clickDot(i);
            });

            // Entrance Animation
            gsap.from(allDots, {
                scale: 0,
                transformOrigin: '50% 50%',
                y: '+=50',
                stagger: 0.1,
                duration: 1,
                ease: 'elastic(0.6, 0.5)'
            });

            // Initial Card Animation
            gsap.from(".event-card[data-page='0']", {
                opacity: 0,
                y: 30,
                stagger: 0.1,
                duration: 0.8,
                ease: "power2.out"
            });
        });
    </script>

    <?php require "common/footer.php"; ?>
</body>

</html>