<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AICTE Feedback Box</title>
    <style>
    .aicte-portal {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 70vh;
        } 
        .aicte-container {
            background-color: #f0f0f0;
            padding: 30px;
            border-radius: 8px;
            text-align: center;
            width: 800px !important;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .title {
            font-size: 22px;
            font-weight: bold;
            color: #a00042;
        }
        .content {
            font-size: 16px;
            color: #333;
            margin-top: 10px;
        }
        .button {
            margin-top: 20px;
        }
        .button a {
            display: inline-block;
            background-color: #004a99;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
        }
        .button a:hover {
            background-color: #003366;
        }
    </style>
</head>
<body>
<?php
    require "common/header.php";
    ?>
     <section class="heroBanner">
        <div id="myCarousel" class="carousel slide h-100" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="upload/infra/aicte-banner.jpg" class="d-block w-100 img-fluid" alt="Slide 1" loading="lazy">
                </div>
            </div>
    </section>
    <section class="aicte-portal">
    <div class="aicte-container">
        <div class="title" id="title"></div>
        <div class="content" id="content"></div>
        <div class="content" id="content2"></div>
        <div class="button">
            <a href="https://www.aicte-india.org/feedback/index.php" target="_blank">Feedback Portal</a>
        </div>
    </div>

    <script>
        function typeEffect(element, text, delay = 50, callback) {
            let i = 0;
            function typing() {
                if (i < text.length) {
                    element.innerHTML += text.charAt(i);
                    i++;
                    setTimeout(typing, delay);
                } else if (callback) {
                    setTimeout(callback, 500);
                }
            }
            typing();
        }

        typeEffect(document.getElementById('title'), 'AICTE Webportal Feedback Facility', 50, function() {
            typeEffect(document.getElementById('content'), 'Feedback facility for students and faculties is also available on the AICTE Web-Portal.', 30, function() {
                typeEffect(document.getElementById('content2'), 'Submit your Feedback Students & Faculty', 30);
            });
        });
    </script>
    </section>
    <?php
    require "common/footer.php";
    ?>
</body>
</html>
