<!-- 1. Include Flickity CSS -->
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

<style>
    .placementLogos-section {
        padding: 30px 0; 
        background: #fff;
        overflow: hidden;
    }

    .main-heading h4 {
        font-family: 'Montserrat', sans-serif;
        font-size: 1.2rem; 
        font-weight: 700;
        text-align: center;
        margin-bottom: 20px; 
        color: #333;
    }

    /* --- SLIDER STRUCTURE --- */
    .placementLogos-section__slider {
        display: flex !important;
        margin: 0;
        padding: 0;
    }

    .placementLogos-section__slider.flickity-enabled {
        display: block !important;
    }

    .pl-item {
        width: 20%; 
        flex: 0 0 20%;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100px; 
        padding: 0 10px; 
        margin: 0;
    }

    .pl-item img {
        width: auto;
        max-width: 100%;
        height: auto;
        max-height: 70px; 
        object-fit: contain; 
        border: none !important; 
        box-shadow: none !important;
        outline: none !important;
        opacity: 0.9;
        transition: transform 0.3s ease;
    }

    .pl-item:hover img {
        opacity: 1;
        transform: scale(1.1);
    }
    

     .slick-slide{
        border: none !important;
        box-shadow: none !important;
    }

    .flickity-viewport { border: none !important; padding: 0 !important; margin: 0 !important; }
    .flickity-page-dots, .flickity-prev-next-button { display: none; }

    
    @media (max-width: 991px) {
        .pl-item { width: 33.33%; flex: 0 0 33.33%; height: 80px; }
        .main-heading h4 { font-size: 1.4rem; }
        .pl-item img { max-height: 60px; }
    }
    @media (max-width: 576px) {
        .pl-item { width: 50%; flex: 0 0 50%; height: 70px; }
        .pl-item img { max-height: 50px; }
        .main-heading h4 { font-size: 1.2rem; margin-bottom: 15px; }
        .placementLogos-section { padding: 20px 0; }
    }
</style>

<section class="placementLogos-section">
    <div class="container">
        <div class="main-heading">
            <h4>Driving innovation through strategic industry collaboration and partnerships</h4>
        </div>
        
        <div class="placementLogos-section__slider">
            <?php
            $recruiterNames = [
                31 => 'KPMG',
                32 => 'Apollo Hospitals',
                33 => 'Fortis Healthcare',
                34 => 'Max Healthcare',
                35 => 'Cipla',
                36 => 'Sun Pharma',
                37 => 'Ranbaxy',
                38 => 'Mankind Pharma',
                39 => 'TCS',
                40 => 'Infosys',
                41 => 'Wipro',
                42 => 'HCL Technologies',
                43 => 'Tech Mahindra',
                44 => 'Accenture',
                45 => 'Deloitte',
                46 => 'L&T',
                47 => 'Taj Hotels',
                48 => 'Oberoi Hotels',
                49 => 'JW Marriott',
                50 => 'Radisson',
                51 => 'Hyatt',
                52 => 'ITC Hotels',
                54 => 'Biocon',
                55 => 'Dr. Reddys',
                56 => 'Lupin Pharmaceuticals',
                57 => 'Cadila Healthcare',
                58 => 'Torrent Pharma',
                59 => 'Glenmark',
                60 => 'AstraZeneca',
                61 => 'GlaxoSmithKline',
                62 => 'Pfizer',
                63 => 'Novartis',
            ];
            for ($i = 31; $i <= 63; $i++) {
                $imgNum = ($i == 53) ? 32 : $i; 
                $altText = isset($recruiterNames[$imgNum]) ? $recruiterNames[$imgNum] . ' Recruiter Logo' : 'Top Industry Recruiter Logo';
                echo '<div class="pl-item">
                        <img src="upload/' . $imgNum . '.webp" alt="' . htmlspecialchars($altText) . '">
                      </div>';
            }
            ?>
        </div>
    </div>
</section>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

<script>
$(document).ready(function() {
    $('.placementLogos-section__slider').flickity({
        cellAlign: 'left',
        contain: true,
        wrapAround: true,  
        autoPlay: 2500,    
        pauseAutoPlayOnHover: true,
        prevNextButtons: false,
        pageDots: false,
        draggable: true,
        selectedAttraction: 0.01,
        friction: 0.15
    });
});
</script>