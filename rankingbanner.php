<!-- ==========================================
     GURU NANAK COLLEGE - INSTITUTIONAL LEGACY BANNER
     ========================================== -->
<section class="gnc-ranking-wrapper">
    <div class="container">
        <div class="row align-items-end">
            
            <!-- LEFT: LARGER STUDENT IMAGE (50% Width) -->
            <div class="col-lg-4 col-md-4 position-relative">
                <img src="upload/extra/nursing.webp" alt="Guru Nanak College Students" class="gnc-rank-img">
            </div>

            <!-- RIGHT: INSTITUTIONAL CONTENT (50% Width) -->
            <div class="col-lg-6 col-md-6">
                
                <!-- TOP ROW: LEGACY & PLACEMENT (Replaces NIRF/QS) -->
                <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
                    
                    <!-- 14+ Years Experience -->
                    <div class="d-flex align-items-center">
                        <div class="v-label">ESTD. 2009</div>
                        <div class="big-num">14<span>+</span></div>
                        <div class="rank-info">
                            YEARS OF <span class="text-orange">ACADEMIC</span><br>
                            EDUCATIONAL<br>
                            EXCELLENCE<br>
                            <small class="text-muted">FOUNDED 2009 <br>GNC DEHRADUN</small>
                        </div>
                    </div>

                    <!-- 100% Placement -->
                    <div class="qs-wrapper text-center">
                        <div class="qs-box-container">
                            <span class="qs-tag">SUCCESSFUL</span>
                            <span class="qs-sub">PLACEMENTS</span>
                            <span class="qs-number">100%</span>
                            <div class="qs-orange-ribbon">Corporate & Industry Tie-ups</div>
                        </div>
                        <span class="qs-bottom-text"></span>
                    </div>
                </div>

                <!-- BOTTOM ROW: NAAC (Removed A+ Grade details) -->
                <div class="gnc-dark-footer d-flex align-items-center">
                    
                    <!-- NAAC ACCREDITATION BADGE (Grade removed) -->
                    <div class="text-center">
                        <div class="naac-circle"><i class="fas fa-award"></i></div>
                        <div class="naac-name">NAAC</div>
                        <div class="naac-grade">ACCREDITED</div>
                    </div>

                    <div class="white-divider"></div>

                    <!-- INSTITUTIONAL DETAILS -->
                    <div class="naac-content">
                        <h5 class="naac-h">A Legacy of Quality Education & Industry Readiness</h5>
                        <p class="naac-p">Guru Nanak College (GNC) focuses on practical skills and industry-relevant curriculum. With 14+ years of sustained commitment, we ensure our graduates in Pharmacy, Paramedical, and Nursing are career-ready.</p>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>

<style>
/* BRAND COLORS & DESIGN SYSTEM */
:root {
    --gnc-navy: #1e2632;
    --gnc-orange: #f37021;
}

/* SECTION STRUCTURE */
.gnc-ranking-wrapper {
    background: linear-gradient(to bottom, #d2caca 50%, var(--gnc-navy) 50%);
    position: relative;
    padding-top: 60px; 
    overflow: hidden;
    font-family: 'Montserrat', sans-serif;
}

/* IMAGE SCALING */
.gnc-rank-img {
    width: 120%;             
    margin-left: -20%;       
    transform: scale(1.1);   
    transform-origin: bottom center;
    filter: grayscale(100%);
    display: block;
    margin-bottom: -1px;     
    position: relative;
    z-index: 5;
}

/* TOP ROW TYPOGRAPHY */
.v-label { writing-mode: vertical-rl; transform: rotate(180deg); font-size: 11px; font-weight: 900; color: #333; margin-right: 12px; }
.big-num { font-size: 110px; font-weight: 900; color: var(--gnc-orange); line-height: 0.8; position: relative; }
.big-num span { font-size: 40px; position: absolute; top: 10px; right: -30px; }
.rank-info { font-size: 14px; line-height: 1.2; font-weight: 800; margin-left: 35px; color: #1a1a1a; }
.text-orange { color: var(--gnc-orange); }

/* PLACEMENT BOX STYLING */
.qs-box-container { border: 3.5px solid var(--gnc-orange); padding: 12px 25px; text-align: center; background: #fff; position: relative; display: inline-block; }
.qs-number { font-size: 45px; font-weight: 900; line-height: 1; color: #1a1a1a; display: block; }
.qs-tag { font-size: 13px; font-weight: 900; display: block; }
.qs-sub { font-size: 10px; letter-spacing: 1px; font-weight: 700; display: block; }
.qs-orange-ribbon { background: var(--gnc-orange); color: #fff; font-size: 12px; font-weight: 800; padding: 4px 4px; position: absolute; bottom: -14px; left: 50%; transform: translateX(-50%); white-space: nowrap; width: 126%; }
.qs-bottom-text { font-size: 9px; font-weight: 900; margin-top: 25px; display: block; color: #333; }

/* NAVY FOOTER */
.gnc-dark-footer { padding: 50px 30px; color: #fff; }
.naac-circle { width: 85px; height: 85px; border: 7px solid var(--gnc-orange); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 36px; color: var(--gnc-orange); margin: 0 auto; line-height: 1; position: relative; }
.naac-name { font-size: 17px; font-weight: 900; letter-spacing: 2px; text-align: center; margin-top: 8px; }
.naac-grade { font-size: 10px; font-weight: 900; background: var(--gnc-orange); color: #fff; display: inline-block; padding: 2px 8px; margin-top: 5px; border-radius: 2px; }
.white-divider { width: 1.5px; height: 100px; background: rgba(255,255,255,0.25); margin: 0 40px; }
.naac-h { font-size: 24px; font-weight: 800; margin-bottom: 5px; line-height: 1.3; }
.naac-p { font-size: 13px; margin-bottom: 0; opacity: 0.8; }

/* MOBILE RESPONSIVE */
@media (max-width: 991px) {
    .gnc-ranking-wrapper { background: #d2caca; padding-top: 20px; }
    .gnc-rank-img { display:none; }
    .gnc-dark-footer { background: var(--gnc-navy); margin: 0 -15px; padding: 40px 20px; flex-direction: column; text-align: center; }
    .white-divider { display: none; }
    .naac-h { font-size: 19px; margin-top: 25px; }
    .big-num { font-size: 80px; }
    .qs-wrapper { margin-top: 40px; width: 100%; }
}
</style>