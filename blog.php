<?php
// index.php - Static Blog Index (HTML + PHP + JS)
// Replace/extend the $posts array with your real posts or generate it from files/db.
// Each post should have: id, title, slug, date, readingTime, excerpt, author(name,avatar), tags(array), image(optional), featured(bool)

$posts = [
    [
        'id' => 1,
        'title' => 'Top Paramedical Courses After 12th in India | GNC Dehradun',
        'url' => 'Top-Paramedical-Courses-After-12th-in-India-Career-Opportunities-&-Scope-at-Guru-Nanak-College-Dehradun',
        'date' => '2025-08-20',
        'excerpt' => 'The healthcare industry in India is growing rapidly, and with it, the demand for skilled paramedical professionals is at an all-time high.',
        'author' => ['name' => 'GNC Dehradun'],
        'tags' => ['Paramedical'],
        'image' => 'upload/blog/1.webp',
        'featured' => true
    ],
    [
        'id' => 2,
        'title' => 'Top 5 BCA Colleges in Dehradun 2025 | Course and Fees Guide',
        'url' => 'top-5-bca-colleges-in-dehradun-2025-course-and-fees-guide',
        'date' => '2025-07-21',
        'excerpt' => 'Dehradun, a renowned academic destination in North India, is home to several reputed institutions
offering quality computer application education.',
        'author' => ['name' => 'GNC Dehradun'],
        'tags' => ['BCA'],
        'image' => 'upload/blog/2.webp',
        'featured' => false
    ],
    [
        'id' => 3,
        'title' => 'Top 5 BPT Colleges in Dehradun | GNC Ultimate Guide',
        'url' => 'top-5-bpt-colleges-in-dehradun-gnc-ultimate-guide',
        'date' => '2025-06-30',
        'excerpt' => 'Dehradun, nestled in the foothills of the Himalayas, is not only known for its scenic beauty but also
for its excellent educational institutions.',
        'author' => ['name' => 'GNC Dehradun'],
        'tags' => ['BPT'],
        'image' => 'upload/blog/3.webp',
        'featured' => false
    ],
    [
        'id' => 4,
        'title' => 'Top 5 Nursing Colleges in Dehradun',
        'url' => 'top-5-nursing-colleges-in-dehradun',
        'date' => '2025-06-27',
        'excerpt' => 'Dehradun, nestled in the serene foothills of the Himalayas, has become a prominent hub for quality
nursing education in North India.',
        'author' => ['name' => 'GNC Dehradun'],
        'tags' => ['Nursing'],
        'image' => 'upload/blog/4.webp',
        'featured' => false
    ],
    [
        'id' => 5,
        'title' => 'Top 5 BBA Colleges in Dehradun 2025 | GNC Guide',
        'url' => 'top-5-bba-colleges-in-dehradun-2025-gnc-guide',
        'date' => '2025-06-21',
        'excerpt' => 'Dehradun has evolved into a leading education hub in North India, offering excellent management
programs for aspiring business leaders.',
        'author' => ['name' => 'GNC Dehradun'],
        'tags' => ['BBA'],
        'image' => 'upload/blog/5.webp',
        'featured' => false
    ],
    [
        'id' => 6,
        'title' => 'Guru Nanak College Receives INC Approval for B.Sc. Nursing Program',
        'url' => 'guru-nanak-college-receives-inc-approval-for-b-sc-nursing-program',
        'date' => '2025-06-09',
        'excerpt' => 'We are delighted to announce that Guru Nanak College has received official approval from the Indian Nursing Council (INC) for its B.Sc. Nursing program.',
        'author' => ['name' => 'GNC Dehradun'],
        'tags' => ['Nursing','INC'],
        'image' => 'upload/blog/6.webp',
        'featured' => false
    ],
    [
        'id' => 7,
        'title' => 'Guru Nanak College Gets IAP Approval for BPT and MPT Courses – Admissions Open for 2025',
        'url' => 'guru-nanak-college-gets-iap-approval-for-bpt-and-mpt-courses-admissions-open-for-2025',
        'date' => '2025-06-09',
        'excerpt' => 'Guru Nanak College is proud to announce that it has received official approval from the Indian Association of Physiotherapists (IAP) for its Bachelor of Physiotherapy (BPT) and Master of Physiotherapy (MPT) programs.',
        'author' => ['name' => 'GNC Dehradun'],
        'tags' => ['Paramedical','IAP'],
        'image' => 'upload/blog/7.webp',
        'featured' => false
    ],
    [
        'id' => 8,
        'title' => 'Best MPH College in Dehradun, Uttarakhand – Guru Nanak College',
        'url' => 'best-mph-college-in-dehradun-uttarakhand-guru-nanak-college',
        'date' => '2025-06-04',
        'excerpt' => 'Are you aspiring to pursue a Master of Public Health (MPH) from a reputed institution in Uttarakhand? Look no further. Guru Nanak College, Dehradun, stands out as one of the best MPH colleges in Dehradun.',
        'author' => ['name' => 'GNC Dehradun'],
        'tags' => ['MPH'],
        'image' => 'upload/blog/8.webp',
        'featured' => false
    ],
    [
        'id' => 9,
        'title' => 'BCA Admissions 2025 Open at Guru Nanak College, Dehradun – Build Your Future in IT and Software',
        'url' => 'bca-admissions-2025-open-at-guru-nanak-college-dehradun-build-your-future-in-it-and-software',
        'date' => '2025-04-25',
        'excerpt' => 'Guru Nanak College has established itself as a premier institution in Uttarakhand, known for its commitment to quality education and industry-aligned programs.',
        'author' => ['name' => 'GNC Dehradun'],
        'tags' => ['BCA'],
        'image' => 'upload/blog/9.webp',
        'featured' => false
    ],
    [
        'id' => 10,
        'title' => 'BBA Admissions 2025 Open at Guru Nanak College, Dehradun – Shape Your Future in Business Today',
        'url' => 'bba-admissions-2025-open-at-guru-nanak-college-dehradun-shape-your-future-in-business-today',
        'date' => '2025-05-02',
        'excerpt' => 'Guru Nanak College has carved a niche in Uttarakhand’s academic landscape with its commitment to quality education, experienced faculty, and career-driven programs.',
        'author' => ['name' => 'GNC Dehradun'],
        'tags' => ['BBA'],
        'image' => 'upload/blog/10.webp',
        'featured' => false
    ],
    [
        'id' => 11,
        'title' => 'Nursing College Admission 2025 at Gurunanak College, Dehradun',
        'url' => 'nursing-college-admission-2025-at-gurunanak-college-dehradun',
        'date' => '2025-04-10',
        'excerpt' => 'The field of nursing is not just a profession—it’s a noble commitment to serving humanity with compassion, dedication, and clinical expertise.',
        'author' => ['name' => 'GNC Dehradun'],
        'tags' => ['Nursing','INC'],
        'image' => 'upload/blog/11.webp',
        'featured' => false
    ],
    [
        'id' => 12,
        'title' => 'Best Pharmacy College in Dehradun – Gurunanak College',
        'url' => 'best-pharmacy-college-in-dehradun-gurunanak-college',
        'date' => '2025-03-25',
        'excerpt' => 'GNC offers D.Pharm (Diploma in Pharmacy) and B.Pharm (Bachelor of Pharmacy) programs that are approved by the Pharmacy Council of India (PCI) and affiliated with recognized universities. ',
        'author' => ['name' => 'GNC Dehradun'],
        'tags' => ['Pharmacy'],
        'image' => 'upload/blog/12.webp',
        'featured' => false
    ],
    [
        'id' => 13,
        'title' => 'Best B.Sc. in Agriculture College in Dehradun: Guru Nanak College',
        'url' => 'best-b-sc-in-agriculture-college-in-dehradun-guru-nanak-college',
        'date' => '2024-12-31',
        'excerpt' => 'Guru Nanak College offers a robust B.Sc. Agriculture program that covers a wide range of topics crucial for a successful career in agriculture.',
        'author' => ['name' => 'GNC Dehradun'],
        'tags' => ['Agriculture'],
        'image' => 'upload/blog/13.webp',
        'featured' => false
    ],
    [
        'id' => 14,
        'title' => 'Best B.Sc in Forestry College in Dehradun: Guru Nanak College',
        'url' => 'best-b-sc-in-forestry-college-in-dehradun-guru-nanak-college',
        'date' => '2024-12-27',
        'excerpt' => 'Guru Nanak College (GNC), Dehradun, is one of the premier institutions for pursuing a Bachelor of Science in Forestry (B.Sc. Forestry).',
        'author' => ['name' => 'GNC Dehradun'],
        'tags' => ['Agriculture','Forestry'],
        'image' => 'upload/blog/14.webp',
        'featured' => false
    ],
    [
        'id' => 15,
        'title' => 'Best M.Sc in Horticulture College in Dehradun: Guru Nanak College',
        'url' => 'best-m-sc-in-horticulture-college-in-dehradun-guru-nanak-college',
        'date' => '2024-12-10',
        'excerpt' => 'Guru Nanak College (GNC), known for its lush green landscapes and educational excellence, stands out as one of the premier institutions for pursuing a Master of Science in Horticulture in Dehradun.',
        'author' => ['name' => 'GNC Dehradun'],
        'tags' => ['Agriculture','Horticulture'],
        'image' => 'upload/blog/15.webp',
        'featured' => false
    ],
   
    // add more items...
];

// Build list of all tags for filter UI
$allTags = [];
foreach ($posts as $p) {
    foreach ($p['tags'] as $t) $allTags[$t] = true;
}
$allTags = array_keys($allTags);
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Blogs</title>
  <meta name="description" content="A static blog index built with HTML, CSS, PHP and vanilla JS.">
</head>
<body>
<?php
    require "common/header.php";
    ?>
    <section class="pageBanner-inner" style="height: 600px !important;">
    <div style="background-image: url('images/post.webp'); background-repeat: no-repeat; background-size: cover;height:600px">
        <div class="pageBanner-inner_in">
            <div class="container">
                <div class="align-items-center">
                    <div class="pageBanner-inner__content inner-content head-sm text-md-start">
                        <div class="upper-banner-content">
                            <h3 class="mb-1 mt-3 text-center">Blogs</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
  <div class="hero container">
      <?php
        // show featured post if exists
        $featured = null;
        foreach ($posts as $p) { if (!empty($p['featured'])) { $featured = $p; break;} }
        if ($featured):
      ?>
      <article class="hero-card" aria-labelledby="hero-title">
        <?php if (!empty($featured['image'])): ?>
          <img src="<?=htmlspecialchars($featured['image'])?>" alt="" class="hero-image" />
        <?php endif; ?>
        <div class="hero-body">
          <p class="kicker">Featured</p>
          <h2 id="hero-title"><?=htmlspecialchars($featured['title'])?></h2>
          <p class="meta">By <?=htmlspecialchars($featured['author']['name'])?> • <?=htmlspecialchars($featured['date'])?> </p>
          <p class="excerpt"><?=htmlspecialchars($featured['excerpt'])?></p>
          <a class="btn" href="<?=urlencode($featured['url'])?>.php">Read more</a>
        </div>
      </article>
      <?php else: ?>
        <div class="hero-body">
          <h2>Welcome to our blog</h2>
          <p>Latest posts, tutorials and essays on web development and design.</p>
        </div>
      <?php endif; ?>
    </div>
  <main class="container main-grid">
    <aside class="filters" aria-label="Filters">
      <div class="search-box">
        <label for="search">Search posts</label>
        <input id="search" placeholder="Search by title or excerpt..." type="search" />
      </div>

      <div class="tag-filter">
        <p class="filter-title">Filter by tag</p>
        <div class="tags">
          <button data-tag="all" class="tag active">All</button>
          <?php foreach ($allTags as $tag): ?>
            <button data-tag="<?=htmlspecialchars($tag)?>" class="tag"><?=htmlspecialchars(ucfirst($tag))?></button>
          <?php endforeach; ?>
        </div>
      </div>

     
    </aside>

    <section class="posts" aria-live="polite">
      <div class="posts-grid" id="posts-grid">
        <?php foreach ($posts as $post): ?>
          <article class="post-card-blog" data-id="<?=intval($post['id'])?>" data-title="<?=htmlspecialchars(strtolower($post['title']))?>" data-excerpt="<?=htmlspecialchars(strtolower($post['excerpt']))?>" data-tags="<?=htmlspecialchars(implode(',', $post['tags']))?>">
            <?php if (!empty($post['image'])): ?>
              <a class="thumb" href="<?=urlencode($post['url'])?>.php">
                <img src="<?=htmlspecialchars($post['image'])?>" alt="" />
              </a>
            <?php endif; ?>
            <div class="post-body">
              <h3 class="post-title"><a href="<?=urlencode($post['url'])?>.php"><?=htmlspecialchars($post['title'])?></a></h3>
              <p class="meta small"><?=htmlspecialchars($post['date'])?></p>
              <p class="excerpt"><?=htmlspecialchars($post['excerpt'])?></p>
              <div class="post-footer">
                <div class="author">
                  
                  <span><?=htmlspecialchars($post['author']['name'])?></span>
                </div>
                <div class="tags-inline">
                  <?php foreach ($post['tags'] as $t): ?>
                    <span class="tag-mini"><?=htmlspecialchars($t)?></span>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
          </article>
        <?php endforeach; ?>
      </div>

      <nav class="pagination" id="pagination" aria-label="Pagination">
        <button id="prev-page" class="page-btn" aria-label="Previous page">Prev</button>
        <span id="page-info">Page 1</span>
        <button id="next-page" class="page-btn" aria-label="Next page">Next</button>
      </nav>
    </section>
  </main>

  <?php
    require "common/footer.php";
    ?>

  <script src="scripts.js" defer></script>
</body>
</html>
<style>
   /* ------------------------------
   Responsive Blog Styles
   Replace your existing inline CSS with this block
   ------------------------------ */

/* Reset-ish */
* { box-sizing: border-box; }
html,body { height:100%; margin:0; padding:0; }
body { font-family: Inter, system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', Arial; color:#111; background:#fbfbfd; line-height:1.45; }

/* CSS Variables */
:root{
  --primary: #0066cc;
  --primary-dark: #004c99;
  --card-bg: #fff;
  --muted: #6b6b80;
  --light-gray: #e9ecef;
  --radius: 12px;
  --drop: 0 8px 30px rgba(16,24,40,0.06);
  --transition: 0.22s cubic-bezier(.2,.9,.2,1);
  --container-max: 1100px;
}

/* Page container */
.container { width:100%; max-width:var(--container-max); margin:0 auto; padding:1rem; }

/* Header / hero helpers (kept light so your common header/footer still control main look) */
.header-inner { display:flex; justify-content:space-between; align-items:center; gap:1rem; }
.brand a { text-decoration:none; color:inherit; font-weight:700; font-size:1.15rem; }

/* Page banner / hero */
.pageBanner-inner { width:100%; }
.pageBanner-inner .pageBanner-inner_in { padding: 56px 0; }
.pageBanner-inner h3 { color:#fff; font-size:2.4rem; margin:0; }

/* Hero small card (featured) */
.hero { padding:1.25rem 0; }
.hero-card { display:flex; gap:1rem; align-items:center; background:var(--card-bg); border-radius:var(--radius); padding:1rem; box-shadow:var(--drop); overflow:hidden; transition:var(--transition); }
.hero-card:hover { transform:translateY(-6px); box-shadow:0 18px 40px rgba(16,24,40,0.08); }
.hero-image { width:42%; height:250px; object-fit:cover; border-radius:10px; flex-shrink:0; }
.hero-body { flex:1; }
.kicker { color:var(--primary); font-weight:700; margin:0 0 .3rem 0; }
.hero .btn { display:inline-block; margin-top:.6rem; padding:.45rem .8rem; background:#111; color:#fff; text-decoration:none; border-radius:8px; font-weight:700; }

/* Two-column main layout */
.main-grid { display:grid; grid-template-columns: 280px 1fr; gap:1.25rem; align-items:start; padding:1rem 0; }

/* Sidebar (filters) */
.filters { position:sticky; top:84px; align-self:start; }
.search-box label { display:block; font-weight:600; margin-bottom:.35rem; color:var(--muted); }
.search-box input { width:100%; padding:.6rem; border-radius:10px; border:1px solid var(--light-gray); font-size:0.95rem; }
.filter-title { font-weight:700; margin:1rem 0 .5rem; display:block; color:#222; }
.tags { display:flex; flex-wrap:wrap; gap:.5rem; }
.tag { background:#f6f7fb; border:none; padding:.35rem .65rem; border-radius:999px; cursor:pointer; font-weight:700; font-size:.9rem; color:#222; }
.tag.active { background:var(--primary); color:#fff; }

/* Info card */
.info-card { margin-top:1rem; background:var(--card-bg); padding:1rem; border-radius:10px; box-shadow:var(--drop); }

/* Posts grid */
.posts-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 1rem;
  align-items:start;
}

/* Each post card */
/* Using .post-card-blog as in your HTML */
.post-card-blog {
  background: var(--card-bg);
  border-radius: var(--radius);
  overflow: hidden;
  transition: var(--transition);
  gap: .75rem;
  align-items: flex-start;
  box-shadow: var(--drop);
  padding: .65rem;
}
.post-card-blog:hover { transform: translateY(-6px); box-shadow: 0 18px 40px rgba(16,24,40,0.08); }

/* Thumbnail (left on desktop) */
.post-card-blog .thumb {
  flex: 0 0 40%;
  max-width: 100%;
  display: block;
  border-radius: 8px;
  overflow: hidden;
}
.post-card-blog .thumb img {
  width: 430px;
  height:240px;
  min-height: 180px;
  object-fit: cover;
  display:block;
  transition: transform var(--transition);
}
.post-card-blog:hover .thumb img { transform: scale(1.03); }

/* Content area */
.post-body { flex: 1 1 60%; padding: .1rem .6rem; display:flex; flex-direction:column; justify-content:flex-start; }
.post-title { margin: .1rem 0 .45rem; font-size:1.05rem; }
.post-title a { color:inherit; text-decoration:none; font-weight:700; }
.meta.small { color:var(--muted); font-size:0.88rem; margin-bottom:.55rem; }
.excerpt { color:#333; flex:0 0 auto; margin-bottom:.8rem; }

/* Post footer (author + tags) */
.post-footer { display:flex; justify-content:space-between; align-items:center; gap:.75rem; margin-top:auto; padding-top:.25rem; border-top:1px solid var(--light-gray); }
.author { display:flex; align-items:center; gap:.5rem; color:var(--muted); font-size:0.95rem; }
.avatar { width:34px; height:34px; border-radius:999px; object-fit:cover; }
.tags-inline { display:flex; gap:.4rem; align-items:center; }

/* Button */
.btn-read-more { display:inline-flex; align-items:center; gap:.45rem; padding:.45rem .9rem; background:var(--primary); color:#fff; border-radius:28px; text-decoration:none; font-weight:700; }

/* Pagination */
.pagination { display:flex; gap:.5rem; justify-content:center; align-items:center; margin-top:1rem; }
.page-btn { padding:.45rem .8rem; border-radius:8px; border:1px solid var(--light-gray); background:#fff; cursor:pointer; }

/* ----------------------
   Responsive breakpoints
   ---------------------- */

/* Large tablets / small laptops */
@media (max-width:1100px) {
  .main-grid { grid-template-columns: 1fr; } /* collapse to single column to give more room */
  .filters { position: relative; top: 0; margin-bottom: 1rem; }
  .posts-grid { grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); }
  .post-card-blog { padding:.5rem; }
  .post-card-blog .thumb { flex: 0 0 45%; max-width:45%; }
}

/* Tablets / landscape phones */
@media (max-width:880px) {
  /* sidebar stacks above posts */
  .main-grid { grid-template-columns: 1fr; }
  .filters { position:relative; top:0; margin-bottom: 18px; }
  .posts-grid { grid-template-columns: repeat(1, 1fr); gap: 1rem; }
  /* keep image left on wider tablets but reduce thumb width */
  .post-card-blog { display:flex; gap:.6rem; }
  .post-card-blog .thumb { flex: 0 0 40%; max-width:40%; min-width:140px; }
  .post-card-blog .thumb img { min-height:160px; }
}

/* Mobile */
@media (max-width:576px) {
  /* make cards stack vertically: image on top, content below */
  .post-card-blog { flex-direction: column; padding:0; border-radius:10px; overflow:hidden; }
  .post-card-blog .thumb { width:100%; max-width:100%; flex: none; }
  .post-card-blog .thumb img { height: 220px; width:100%; object-fit:cover; border-radius:0; }
  .post-body { padding: 12px; }
  .pageBanner-inner .pageBanner-inner_in { padding: 36px 0; }
  .pageBanner-inner h3 { font-size:1.6rem; }
  .tags { gap:.4rem; }
  .tag { font-size:.88rem; padding:.45rem .65rem; }
  .btn-read-more { padding:.45rem .75rem; font-size:.95rem; }
  .author { font-size:.9rem; }
}

/* Tiny phones */
@media (max-width:360px) {
  .post-card-blog .thumb img { height:180px; }
  .post-title { font-size:1rem; }
  .excerpt { font-size:0.95rem; }
  .pageBanner-inner h3 { font-size:1.45rem; }
}

/* Utility: ensure default placeholder image looks good */
.post-card-blog .thumb img[src=""], .post-card-blog .thumb img[alt=""] {
  object-fit:contain;
  background:#f5f5f7;
}

/* Accessibility: focus states */
a:focus, button:focus { outline: 3px solid rgba(0,102,204,0.14); outline-offset:2px; }

/* End of file */
</style>
<script>
    // scripts.js - client-side search, tag filtering, and simple pagination

document.addEventListener('DOMContentLoaded', function () {
  const searchInput = document.getElementById('search');
  const tagButtons = document.querySelectorAll('.tag-filter .tag');
  const postsGrid = document.getElementById('posts-grid');
  const postCards = Array.from(postsGrid.querySelectorAll('.post-card-blog'));
  const prevBtn = document.getElementById('prev-page');
  const nextBtn = document.getElementById('next-page');
  const pageInfo = document.getElementById('page-info');

  // pagination settings
  const PAGE_SIZE = 6;
  let currentPage = 1;
  let activeTag = 'all';
  let currentQuery = '';

  function filterAndRender() {
    const q = currentQuery.trim().toLowerCase();
    let filtered = postCards.filter(card => {
      const title = card.getAttribute('data-title') || '';
      const excerpt = card.getAttribute('data-excerpt') || '';
      const tags = (card.getAttribute('data-tags') || '').split(',');
      const matchesQuery = q === '' || title.includes(q) || excerpt.includes(q);
      const matchesTag = activeTag === 'all' || tags.includes(activeTag);
      return matchesQuery && matchesTag;
    });

    // pagination
    const totalPages = Math.max(1, Math.ceil(filtered.length / PAGE_SIZE));
    if (currentPage > totalPages) currentPage = totalPages;
    const start = (currentPage - 1) * PAGE_SIZE;
    const pageItems = filtered.slice(start, start + PAGE_SIZE);

    // hide all and then show pageItems
    postCards.forEach(c => c.style.display = 'none');
    pageItems.forEach(c => c.style.display = '');

    pageInfo.textContent = `Page ${currentPage} of ${totalPages}`;
    prevBtn.disabled = currentPage <= 1;
    nextBtn.disabled = currentPage >= totalPages;
  }

  // handlers
  searchInput.addEventListener('input', function (e) {
    currentQuery = e.target.value;
    currentPage = 1;
    filterAndRender();
  });

  tagButtons.forEach(btn => {
    btn.addEventListener('click', function () {
      tagButtons.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      activeTag = btn.dataset.tag;
      currentPage = 1;
      filterAndRender();
    });
  });

  prevBtn.addEventListener('click', function () {
    if (currentPage > 1) { currentPage--; filterAndRender(); }
  });
  nextBtn.addEventListener('click', function () {
    currentPage++; filterAndRender();
  });

  // initial render
  filterAndRender();
});

</script>