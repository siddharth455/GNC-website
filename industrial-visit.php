<!DOCTYPE html>
<html>

<head>
    <link rel="icon" type="image/webp" href="images/logog.webp">
    <title>Guru Nanak College Dehradun, Uttarakhand | Industrial Visit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Guru Nanak College in Dehradun, Uttarakhand, has a robust placement program designed to ensure students are well-prepared for their professional careers. Guru Nanak College's placement cell works tirelessly to ensure that every student has access to diverse placement opportunities and is equipped with the necessary skills for a successful career.">
    <link rel="canonical" href="https://www.gnc.edu.in/placement-overview">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Best Paramedical, Nursing, Pharmacy, Vocational, Health Science, Life & Allied Sciences, Agriculture Science, Management & Technology College in Dehradun, Uttarakhand, India - GNC Dehradun" />
    <meta property="og:description" content="Guru Nanak College in Dehradun, Uttarakhand, has a robust placement program designed to ensure students are well-prepared for their professional careers. Guru Nanak College's placement cell works tirelessly to ensure that every student has access to diverse placement opportunities and is equipped with the necessary skills for a successful career." />
    <meta property="og:url" content="https://www.gnc.edu.in/placement-overview" />
    <meta property="og:site_name" content="GNC Dehradun" />
    <meta property="article:publisher" content="https://www.facebook.com/gncmh" />
    <meta property="og:image" content="https://www.gnc.edu.in/upload/about-us-head.webp" />
    <meta property="og:image:width" content="383" />
    <meta property="og:image:height" content="256" />
    <meta property="og:image:type" content="image/webp" />
</head>
<body>
<?php
    require "common/header.php";
    ?>
    <section class="pageBanner-inner">
        <div style="background-image: url('upload/infra/industry-visit.jpg'); background-repeat: no-repeat; background-size: cover;">
            <div class="pageBanner-inner_in">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-xl-7">
                            <div class="pageBanner-inner__content inner-content head-sm text-md-start">
                                <div class="upper-banner-content">
                                    <div class="pb-flex d-flex align-items-center justify-content-center justify-content-lg-start mt-3">
                                        <h5 class=" text-white border-right me-3 pe-3 mb-0"></h5>
                                    </div>
                                    <h3 class="mb-1 mt-3">Industrial Visit</small></h3>
                                    <h5 class=" text-white">A unique opportunity for students to <br>explore real-world industry practices and <br>enhance their practical knowledge.</h5>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="visit-container">
        <div class="left-section">
            <h2>Industrial Visit by Guru Nanak College</h2>
            <p>Guru Nanak College is committed to providing students with <strong>practical exposure</strong> to industry environments, ensuring they gain <strong>real-world insights</strong> beyond classroom learning. This visit allows students to explore modern industry practices and witness real-time industry operations.</p>

            <h2>Purpose of the Visit</h2>
            <p>The primary goal of this visit was to <strong>bridge the gap</strong> between theoretical concepts and their industrial applications. Students had the opportunity to:</p>
            <ul>
                <li>Observe <strong>real-time industry operations</strong> and workflows.</li>
                <li>Understand <strong>cutting-edge technologies</strong> and automation processes.</li>
                <li>Interact with <strong>industry experts</strong> for valuable insights.</li>
                <li>Gain first-hand experience of <strong>corporate work culture</strong>.</li>
            </ul>
        </div>

        <div class="right-section">
            <h2>Key Highlights of the Visit</h2>
            <ul>
                <li>Guided tour of <strong>manufacturing units and production facilities</strong>.</li>
                <li>Demonstration of <strong>modern machinery and industrial automation</strong>.</li>
                <li>Interactive session with <strong>industry professionals</strong> discussing career opportunities.</li>
                <li>Exposure to <strong>real-world problem-solving</strong> in industrial settings.</li>
            </ul>

            <h2>Student Experience & Learning</h2>
            <p>The industrial visit provided students with an <strong>enriching learning experience</strong>, reinforcing classroom studies with <strong>practical exposure</strong>. Students were able to witness the <strong>importance of innovation, efficiency, and safety</strong> in industrial operations.</p>

            <p>Such initiatives by <strong>Guru Nanak College</strong> continue to play a vital role in preparing students for <strong>future careers</strong>, equipping them with the <strong>skills, confidence, and knowledge</strong> needed to excel in the industry.</p>
        </div>
    </section>
    <div class="container">
        <div class="visit-grid" id="visitGrid"></div>
    </div>
    
    <script>
    // Load industrial visit data from JSON
    fetch('visits.json')
        .then(response => response.json())
        .then(data => {
            const visitGrid = document.getElementById('visitGrid');
            data.visits.forEach(visit => {
                const visitCard = document.createElement('div');
                visitCard.classList.add('visit-card');
                
                // Use the first image as the profile image
                const profileImage = visit.images[0];

                visitCard.innerHTML = `
                    <div class="visit-profile-image">
                        <img src="${profileImage}" alt="${visit.title}  Profile Image">
                    </div>
                    <h3>${visit.title}</h3>
                    <a href="details.php?id=${visit.id}" class="arrow">→</a>
                `;
                
                visitGrid.appendChild(visitCard);
            });
        });
</script>

     <?php require "company-logo.php" ?>
      <?php require "testimoni.php"; ?>
    <?php
    require "common/footer.php";
    ?>
</body>
</html>
<!-- styles.css -->
 <style>
.visit-grid {
    display: flex;
    flex-wrap: wrap;
}
.visit-grid h3{
    font-size:larger;
}
.visit-card {
    border: 1px solid #ccc;
    padding: 20px;
    margin: 30px 15px 25px 15px;
    width: 400px;
    text-align: center;
    box-shadow: 2px 2px 10px rgba(0,0,0,0.1);
}
.visit-card img {
    width: 100%;
    height: 300px;
    object-fit: cover;
}
.arrow {
    display: block;
    text-decoration: none;
    font-size: 24px;
    margin-top: 10px;
    color: #007bff;
}
.arrow:hover {
    color: #0056b3;
}
.visit-container {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        max-width: 1400px;
        margin: 50px auto;
        padding: 0 40px;
    }

    .left-section,
    .right-section {
        width: 48%;
    }

    .left-section h2 {
        font-size: 28px;
        color: #0056b3;
    }

    .right-section h2 {
        font-size: 28px;
        color: #0056b3;
    }
    @media (max-width: 768px) {
        .visit-container {
            flex-direction: column;
            margin: 15px 0;
        }

        .left-section,
        .right-section {
            width: 100%;
            padding: 5px;
        }
    }
</style>
