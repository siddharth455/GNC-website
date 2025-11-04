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
        <img src="upload/computer-lab.webp">
        <div class="overlay">
          <h4>Computer Lab</h4>
          <p>Our state-of-the-art Computer Lab offers high-performance systems, modern software tools, and a collaborative environment for advanced computing research and learning.</p>
        </div>
      </div>

      <div class="slide-research">
        <img src="upload/ph-1.webp">
        <div class="overlay">
          <h4>Pharmaceutics-I</h4>
          <p>Pharmaceutics-I Lab focuses on formulation development, dosage design, physical drug evaluation, and hands-on experimentation supporting pharmaceutical innovation and practical learning.</p>
        </div>
      </div>

      <div class="slide-research">
        <img src="upload/pharmaceutics-1.webp">
        <div class="overlay">
          <h4>Pharmaceutics-II</h4>
          <p>Pharmaceutics-II Lab emphasizes advanced drug delivery systems, biopharmaceutics studies, pre-formulation evaluation, and innovative formulation techniques for real-world pharmaceutical applications.</p>
        </div>
      </div>

      <div class="slide-research">
        <img src="upload/pharmaceautics chemistry-3.webp">
        <div class="overlay">
          <h4>Pharmaceutics-III</h4>
          <p>Pharmaceutics-III Lab focuses on novel formulation technologies, stability testing, polymer-based drug systems, and experimental optimization supporting industry-ready pharmaceutical development.</p>
        </div>
      </div>

      <div class="slide-research">
        <img src="upload/pharmaceutics.webp">
        <div class="overlay">
          <h4>Pharmacognosy</h4>
          <p>Pharmacognosy Lab focuses on identification, evaluation, extraction and characterization of natural medicinal plants supporting herbal drug research and phytochemical studies.</p>
        </div>
      </div>

      <div class="slide-research">
        <img src="upload/machine.webp">
        <div class="overlay">
          <h4>Pharmaceutical Chemistry-I</h4>
          <p>Pharmaceutical Chemistry-I Lab provides hands-on experience in chemical analysis, drug identification, and purity determination essential for fundamental medicinal chemistry understanding.</p>
        </div>
      </div>

      <div class="slide-research">
        <img src="upload/anatomy.webp">
        <div class="overlay">
          <h4>Human Anatomy and Physiology</h4>
          <p>Human Anatomy & Physiology Lab enables microscopic tissue analysis, organ system study, physiological experiments, and real-time understanding of human body structure and function.</p>
        </div>
      </div>

      <div class="slide-research">
        <img src="upload/fundamental-nursing.webp">
        <div class="overlay">
          <h4>fundamental of Nursing Lab</h4>
          <p>Fundamental of Nursing Lab provides skill-based clinical training for patient care, vital sign assessment, basic procedures, and foundational nursing practice techniques.</p>
        </div>
      </div>

      <div class="slide-research">
        <img src="upload/pediatric-lab.webp">
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
  padding:90px 0;
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

@media(max-width:900px){
  .gnc-research-block{padding-left:20px;}
  .slide-research{min-width:100%;}
  .slide-track{margin-left: 0px;}
  .title{text-align: center;}
}
</style>

<script>
const sec = document.querySelector('#gncResearch');
const stats = document.querySelectorAll('.stat');

let observer = new IntersectionObserver((e)=>{
  e.forEach(entry=>{
    if(entry.isIntersecting){
      sec.classList.add('active');
      stats.forEach(s=>{
        let end = +s.dataset.val;
        let start=0;
        let step = end/60;
        let span = s.querySelector('span');
        let run = setInterval(()=>{
          start+=step;
          if(start>=end){
            clearInterval(run);
            start=end;
          }
          span.innerHTML = Math.floor(start)+'+';
        },16);
      });
    }else{
      sec.classList.remove('active');
      stats.forEach(s=> s.querySelector('span').innerHTML='0+');
    }
  })
},{
  threshold:.4
});

observer.observe(sec);
</script>
