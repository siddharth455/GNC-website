<section class="gnc-research-block" id="gncResearch">
  <div class="why-header-title">
    <h2><span>Pioneering</span> Research</h2>
  </div>

  <div class="stats-row">
    <div class="stat" data-val="100"><span>0+</span><p>Research Publications</p></div>
    <div class="stat" data-val="250"><span>0+</span><p>Book Chapters</p></div>
    <div class="stat" data-val="15"><span>0+</span><p>Research Projects</p></div>
    <div class="stat" data-val="600000"><span>0+</span><p>Industry Funded</p></div>
  </div>

  <div class="labs-slider">
    <div class="slide-track">

      <div class="slide-research">
        <img src="upload/computer-lab.webp" alt="Computer Lab">
        <div class="overlay">
          <h4>Computer Lab</h4>
          <p>Our state-of-the-art Computer Lab offers high-performance systems, modern software tools, and a collaborative environment for advanced computing research and learning.</p>
        </div>
      </div>

      <div class="slide-research">
        <img src="upload/ph-1.webp" alt="Pharmaceutics-I">
        <div class="overlay">
          <h4>Pharmaceutics-I</h4>
          <p>Pharmaceutics-I Lab focuses on formulation development, dosage design, physical drug evaluation, and hands-on experimentation supporting pharmaceutical innovation and practical learning.</p>
        </div>
      </div>

      <div class="slide-research">
        <img src="upload/pharmaceutics-1.webp" alt="Pharmaceutics-II">
        <div class="overlay">
          <h4>Pharmaceutics-II</h4>
          <p>Pharmaceutics-II Lab emphasizes advanced drug delivery systems, biopharmaceutics studies, pre-formulation evaluation, and innovative formulation techniques for real-world pharmaceutical applications.</p>
        </div>
      </div>

      <div class="slide-research">
        <img src="upload/pharmaceautics chemistry-3.webp" alt="Pharmaceutics-III">
        <div class="overlay">
          <h4>Pharmaceutics-III</h4>
          <p>Pharmaceutics-III Lab focuses on novel formulation technologies, stability testing, polymer-based drug systems, and experimental optimization supporting industry-ready pharmaceutical development.</p>
        </div>
      </div>

      <div class="slide-research">
        <img src="upload/pharmaceutics.webp" alt="Pharmacognosy">
        <div class="overlay">
          <h4>Pharmacognosy</h4>
          <p>Pharmacognosy Lab focuses on identification, evaluation, extraction and characterization of natural medicinal plants supporting herbal drug research and phytochemical studies.</p>
        </div>
      </div>

      <div class="slide-research">
        <img src="upload/machine.webp" alt="Pharmaceutical Chemistry-I">
        <div class="overlay">
          <h4>Pharmaceutical Chemistry-I</h4>
          <p>Pharmaceutical Chemistry-I Lab provides hands-on experience in chemical analysis, drug identification, and purity determination essential for fundamental medicinal chemistry understanding.</p>
        </div>
      </div>

      <div class="slide-research">
        <img src="upload/anatomy.webp" alt="Human Anatomy and Physiology">
        <div class="overlay">
          <h4>Human Anatomy and Physiology</h4>
          <p>Human Anatomy & Physiology Lab enables microscopic tissue analysis, organ system study, physiological experiments, and real-time understanding of human body structure and function.</p>
        </div>
      </div>

      <div class="slide-research">
        <img src="upload/fundamental-nursing.webp" alt="Fundamental of Nursing Lab">
        <div class="overlay">
          <h4>fundamental of Nursing Lab</h4>
          <p>Fundamental of Nursing Lab provides skill-based clinical training for patient care, vital sign assessment, basic procedures, and foundational nursing practice techniques.</p>
        </div>
      </div>

      <div class="slide-research">
        <img src="upload/pediatric-lab.webp" alt="Pediatric Lab">
        <div class="overlay">
          <h4>Pediatric Lab</h4>
          <p>Pediatric Lab trains students in child health assessment, growth monitoring, pediatric nursing procedures, and safe care techniques for infants and children.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<style>
.gnc-research-block{
  padding:0px 0;
  background:#fff;
  text-align:left;
  padding-left:160px;
  padding-right:0;
  opacity:0;
  transform:translateY(80px);
  transition:all .7s ease;
}
.gnc-research-block.active{
  opacity:1;
  transform:translateY(0);
}

.stats-row{
  display:flex;
  gap:80px;
  margin:50px 100px;
  flex-wrap:wrap;
}

.stat span{
  color:#fc8435;
  font-size:50px;
  font-weight:700;
}

.labs-slider{
  width:100%;
  overflow:hidden;
  position:relative;
  margin-top:40px;
  margin-left: 100px;
}

/* Desktop continuous scroll preserved */
.slide-track{
  display:flex;
  animation:scroll 30s linear infinite;
}

@keyframes scroll{
  0%{ transform:translateX(0); }
  100%{ transform:translateX(-50%); }
}

.slide-research{
  min-width:450px;
  height:260px;
  margin-right:25px;
  border-radius:16px;
  overflow:hidden;
  position:relative;
}

.slide-research img{
  width:100%;
  height:100%;
  object-fit:cover;
}

/* modified overlay always visible */
/* default – image visible + slight dark overlay + lab name visible */
.slide-research .overlay{
  position:absolute;
  inset:0;
  background:rgba(0,0,0,0.45); /* small dark to make name readable */
  color:#fff;
  display:flex;
  flex-direction:column;
  align-items:center;
  justify-content:center;
  text-align:center;
  padding:20px;
  transition:.35s ease;
}

.slide-research .overlay h4{
  font-size:22px;
  font-weight:700;
  margin:0;
  position:absolute;
  bottom:18px;
  left:20px;
  opacity:1;
  transition:.35s ease;
}
.slide-research .overlay p{
  font-size:17px;
  margin-top:10px;
  opacity:0;
  transform:translateY(10px);
  transition:.35s ease;
}

/* hover – blue light background + hide name + show paragraph */
.slide-research:hover .overlay{
  background:rgba(77, 105, 207, 0.9); /* blue light */
}

.slide-research:hover .overlay h4{
  opacity:0;
  transform:translateY(-10px);
}

.slide-research:hover .overlay p{
  opacity:1;
  transform:translateY(0);
}

/* MOBILE: one slide visible, full-bleed, auto-scroll one-by-one */
@media (max-width:900px) {
  /* keep your existing small-screen padding change, slightly reduced */
  .gnc-research-block { padding:10px; padding-left:10px; }

  /* make the slider full-bleed with no left/right margins and centered content */
  .labs-slider{
    width:100%;
    margin: 0;              /* remove left margin */
    padding: 0;
    overflow: hidden;      /* hide overflow — we'll control scrolling via JS */
    -webkit-overflow-scrolling: touch;
  }

  /* remove the desktop continuous animation on mobile */
  .slide-track{
    display:flex;
    gap:0;                 /* remove gaps so only one slide shows */
    animation: none !important;
    width: 100%;
    will-change: transform;
  }

  /* each slide takes exactly the viewport width (one visible at a time) */
  .slide-research{
    min-width:100%;
    flex: 0 0 100%;
    margin:0;              /* remove right margin */
    border-radius:16px;
    overflow:hidden;
    position:relative;
    scroll-snap-align: center; /* helpful for manual swipes */
  }

  /* ensure images fill the slide cleanly */
  .slide-research img{
    width:100%;
    height:100%;
    object-fit:cover;
    display:block;
  }

  /* keep overlay behavior the same (no JS/CSS changes to hover logic) */
  .slide-research .overlay h4{
    bottom:18px;
    left:20px;
  }

  /* adjust stats-row spacing on small screens */
  .stats-row{ margin: 30px 16px; gap:24px; }
}
</style>

<script>
const sec = document.querySelector('#gncResearch');
const stats = document.querySelectorAll('.stat');

let hasAnimated = false;

let observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {

    /* SECTION ENTERS VIEW → animate IN */
    if (entry.isIntersecting && !hasAnimated) {
      sec.classList.add('active');
      hasAnimated = true;

      stats.forEach(s => {
        let end = +s.dataset.val;
        let start = 0;
        let step = end / 60;
        let span = s.querySelector('span');

        let run = setInterval(() => {
          start += step;
          if (start >= end) {
            clearInterval(run);
            start = end;
          }
          span.innerHTML = Math.floor(start) + '+';
        }, 16);
      });
    }

    /* SECTION FULLY OUT OF VIEW → animate OUT */
    if (
      entry.boundingClientRect.bottom < 0 || 
      entry.boundingClientRect.top > window.innerHeight
    ) {
      sec.classList.remove('active');
      hasAnimated = false;

      stats.forEach(s => {
        s.querySelector('span').innerHTML = '0+';
      });
    }

  });
}, {
  threshold: 0.4
});

observer.observe(sec);
</script>


<!-- Mobile one-slide auto-scroll script — appended after your original script -->
<script>
(function(){
  const MOBILE_BREAK = 900;        // must match CSS media query
  const INTERVAL_MS = 2000;        // time between auto-advances (2s — adjust to taste)
  const RESUME_DELAY = 1000;       // resume after user interaction stops
  const labsSlider = document.querySelector('.labs-slider');
  const slideTrack = document.querySelector('.slide-track');
  if(!labsSlider || !slideTrack) return;

  const slides = slideTrack.querySelectorAll('.slide-research');
  if(slides.length === 0) return;

  let autoScrollTimer = null;
  let resumeTimer = null;
  let isUserInteracting = false;

  function isMobile() {
    return window.innerWidth <= MOBILE_BREAK;
  }

  // calculate full slide width (viewport width inside labsSlider)
  function getSlideWidth() {
    return labsSlider.clientWidth;
  }

  // Advance one slide; if at end -> jump to start then advance to create loop effect
  function advanceOneSlide() {
    if (!isMobile()) return;
    const slideWidth = getSlideWidth();
    const maxScrollLeft = slideTrack.scrollWidth - labsSlider.clientWidth;
    const current = Math.round(labsSlider.scrollLeft);

    // if near end, jump to start instantly (no animation), then smooth-scroll to first slide
    if (current + slideWidth > maxScrollLeft + 2) {
      labsSlider.scrollTo({ left: 0, behavior: 'auto' });
      // small timeout to allow the immediate jump to take effect before a smooth scroll
      setTimeout(()=> {
        labsSlider.scrollBy({ left: slideWidth, behavior: 'smooth' });
      }, 60);
    } else {
      labsSlider.scrollBy({ left: slideWidth, behavior: 'smooth' });
    }
  }

  function startAutoScroll() {
    stopAutoScroll();
    if (!isMobile()) return;
    autoScrollTimer = setInterval(()=> {
      if (!isUserInteracting) advanceOneSlide();
    }, INTERVAL_MS);
  }

  function stopAutoScroll() {
    if (autoScrollTimer) {
      clearInterval(autoScrollTimer);
      autoScrollTimer = null;
    }
  }

  // Pause behavior when user interacts (touch/drag) — resume after a small idle
  function onUserInteractStart() {
    isUserInteracting = true;
    if (resumeTimer) { clearTimeout(resumeTimer); resumeTimer = null; }
  }

  function onUserInteractEnd() {
    if (resumeTimer) clearTimeout(resumeTimer);
    resumeTimer = setTimeout(()=> { isUserInteracting = false; }, RESUME_DELAY);
  }

  // Events for touch and pointer interactions (works on most devices)
  labsSlider.addEventListener('touchstart', onUserInteractStart, {passive:true});
  labsSlider.addEventListener('pointerdown', onUserInteractStart);
  labsSlider.addEventListener('touchend', onUserInteractEnd);
  labsSlider.addEventListener('pointerup', onUserInteractEnd);
  labsSlider.addEventListener('pointercancel', onUserInteractEnd);
  labsSlider.addEventListener('touchcancel', onUserInteractEnd);

  // If user scrolls manually (drag), treat it as interaction and resume after short idle
  let scrollTimeout = null;
  labsSlider.addEventListener('scroll', () => {
    onUserInteractStart();
    if (scrollTimeout) clearTimeout(scrollTimeout);
    scrollTimeout = setTimeout(() => { onUserInteractEnd(); }, 500);
  }, { passive:true });

  // Start/stop on resize to respect desktop/mobile
  let resizeTimer = null;
  window.addEventListener('resize', ()=> {
    if (resizeTimer) clearTimeout(resizeTimer);
    resizeTimer = setTimeout(()=> {
      if (isMobile()) {
        startAutoScroll();
      } else {
        stopAutoScroll();
      }
    }, 150);
  });

  // Kick off on load if mobile
  if (isMobile()) startAutoScroll();

  // Clean-up on unload
  window.addEventListener('beforeunload', stopAutoScroll);
})();
</script>
