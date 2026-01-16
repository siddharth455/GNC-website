<!-- Include AOS CSS in your <head> if not already present -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<section class="ranking-sec gnc-legacy-integration">
    <div class="container px-188 px-1399 h-100">
        <div class="row h-100 align-items-end">
            
            <!-- LEFT: STUDENT IMAGE -->
            <div class="col-md-5 d-none d-md-block">
                <img src="upload/extra/nursing.webp" alt="GNC Students" class="rankInset">
            </div>

            <!-- RIGHT: CONTENT AREA -->
            <div class="col-md-7 h-100">
                
                <!-- TOP ROW (Stats): Matches h-49 alignment -->
                <div class="row h-49 align-items-center">
                    <div class="col-sm-7">
                        <div class="legacy-badge-wrapper" data-aos="fade-up" data-aos-duration="600">
                            <div class="v-label">Est. 2009</div>
                            <div class="big-num">14<span>+</span></div>
                            <div class="nirf-info">
                                <span class="nirf-h">YEARS OF <br><span class="txt-orange">ACADEMIC</span></span>
                                <span class="nirf-p">EXCELLENCE</span>
                                <small>FOUNDED 2009 | DEHRADUN</small>
                            </div>
                        </div>
                    </div>   
                    <div class="col-sm-5 text-end">
                        <div class="placement-box-wrapper" data-aos="fade-up" data-aos-duration="900">
                            <div class="qs-border-box">
                                <span class="qs-t">SUCCESSFUL</span>
                                <span class="qs-s">PLACEMENTS</span>
                                <span class="qs-v">100%</span>
                                <div class="qs-ribbon">Corporate & Industry Tie-ups</div>
                            </div>
                        </div>
                    </div>
                </div>  

                <!-- BOTTOM ROW (Navy Footer): Matches h-51 alignment -->
                <div class="row h-51 align-items-center navy-bg-integrated">
                    <div class="col-sm-4 text-center">
                        <div class="naac-badge-integrated" data-aos="fade-left" data-aos-duration="800">
                            <div class="naac-ring"><i class="fas fa-award"></i></div>
                            <strong>NAAC</strong>
                            <span>ACCREDITED</span>
                        </div>
                    </div>   
                    <div class="col-sm-8">
                        <div class="legacy-info-integrated" data-aos="fade-right" data-aos-duration="800">
                            <h5>A Legacy of Quality Education & Industry Readiness</h5>
                            <p>Guru Nanak College (GNC) focuses on practical skills and industry-relevant curriculum. With 14+ years of sustained commitment, we ensure our graduates are career-ready.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<style>
/* CSS Integration based on ranking-sec structure */
.gnc-legacy-integration {
    background: linear-gradient(to bottom, #f3f3f3 50%, #1e2632 50%);
    font-family: 'Montserrat', sans-serif;
    overflow: hidden;
    padding-top: 60px; /* Custom top padding */
}

/* Reference classes from your snippet */
.h-49 { height: 49%; padding-bottom: 30px; }
.h-51 { height: 51%; background: #1e2632; padding: 36px 20px;}
.px-188 { padding-left: 80px; padding-right: 80px; }

/* Left Image styling */
.rankInset {
    width: 100%;
    max-width: 554px;
    scale:1.8;
    display: block;
    margin-bottom: -5px;
    padding-right:4rem;
}

/* Stat Badge Styling (Top Row) */
.legacy-badge-wrapper { display: flex; align-items: center; }
.v-label { writing-mode: vertical-rl; transform: rotate(180deg); font-size: 10px; font-weight: 800; color: #666; margin-right: 15px; }
.big-num { font-size: 110px; font-weight: 900; color: #f37021; line-height: 0.7; position: relative; }
.big-num span { font-size: 35px; position: absolute; top: 10px; right: -25px; }
.nirf-info { border-left: 1px solid #ccc; padding-left: 20px; margin-left: 25px; }
.nirf-h { font-size: 15px; font-weight: 800; line-height: 1.1; display: block; }
.nirf-p { font-size: 16px; font-weight: 900; display: block; letter-spacing: 1px; }
.txt-orange { color: #f37021; }

.qs-border-box { border: 4px solid #f37021; background: #fff; padding: 10px 20px; text-align: center; position: relative; display: inline-block; width: 180px; }
.qs-v { font-size: 45px; font-weight: 900; color: #111; line-height: 1; display: block; }
.qs-ribbon { background: #f37021; color: #fff; font-size: 10px; font-weight: 800; padding: 4px; position: absolute; bottom: -12px; left: -10%; width: 120%; }

/* Navy Section Styling (Bottom Row) */
.naac-badge-integrated { color: #fff; }
.naac-ring { width: 70px; height: 70px; border: 5px solid #f37021; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 30px; color: #f37021; margin: 0 auto 10px; }
.naac-badge-integrated strong { display: block; font-size: 18px; letter-spacing: 2px; }
.naac-badge-integrated span { font-size: 9px; opacity: 0.7; }

.legacy-info-integrated h5 { color: #fff; font-size: 22px; font-weight: 800; margin-bottom: 10px; border-left: 1px solid rgba(255,255,255,0.2); padding-left: 25px; }
.legacy-info-integrated p { color: #fff; font-size: 13px; opacity: 0.8; padding-left: 25px; line-height: 1.6; }

/* Responsive */
@media (max-width: 991px) {
    .gnc-legacy-integration { background: #f3f3f3; padding-top: 30px; }
    .h-49, .h-51 { height: auto; padding: 30px 15px; }
    .navy-bg-integrated { background: #1e2632; margin: 0 -15px; }
    .legacy-badge-wrapper { justify-content: center; margin-bottom: 30px; }
    .placement-box-wrapper { text-align: center !important; margin-bottom: 30px; }
    .legacy-info-integrated h5, .legacy-info-integrated p { border: 0; padding-left: 0; }
}
</style>

<!-- Include AOS JS at the end of your body -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
      once: false, // Animation happens every time you scroll up/down
      mirror: true
  });
</script>