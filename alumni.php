<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/webp" href="images/logog.webp">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni | Guru Nanak College - Connecting Past and Present Achievements</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        .content {
            margin: 20px;
            text-align: center;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1em;
            background-color: #ffffff00 !important;
            width: auto;
        }

        .bg-dark {
            --bs-bg-opacity: 1;
            background-color: rgb(0, 159, 252) !important;
        }

        .alumni_content h2 {
            text-align: center;
            font-weight: bolder;
            font-size: 30px;
        }

        .alumni_content p {
            float: left;
            font-size: 17px;
            font-family: sans-serif;

        }

        .logo_alumni img {
            position: absolute;
            width: 12%;
            margin: 20px 0px 10px 60px;
        }

        /* Hide phone image by default */
        .phone-image {
            display: none;
        }

        /* Media query for devices with a max width of 768px (typically phones) */
        @media (max-width: 768px) {

            /* Hide desktop image when on phones */
            .desktop-image {
                display: none !important;
            }

            /* Show phone image on phones */
            .phone-image {
                display: block;
                width: 100%;
                height: auto;
            }
        }

        /* Show desktop image by default */
        .desktop-image {
            width: 100%;
            height: auto;
            display: block;
        }
    </style>
</head>

<body>
    <div class="image-container">
        <a href="alumni_registration.php"><img src="upload/alumni_desktop.webp" alt="Desktop Image" class="desktop-image"></a>
        <a href="alumni_registration.php"> <img src="upload/alumni_phone.webp" alt="Phone Image" class="phone-image"></a>
    </div>
    <section class="container mt-5 mb-5">
        <div class="alumni_content">
            <h2>
                Welcome to GNC Alumni
            </h2>
            <p>Greetings and a warm welcome back to the GNC family! As you step into our alumni community, you're rejoining a vibrant network of professionals, leaders, and innovators who all share a common beginning at GNC. This page is your bridge back to those unforgettable days on campus and a portal to new opportunities, connections, and ways to give back to the institution that played a crucial role in shaping your future.</p>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <h2>Why Stay Connected?</h2>
                    <ul>
                        <li>Community: Reconnect with old classmates, meet new friends, and be part of a supportive network that spans the globe.</li>
                        <li> Professional Development: Access exclusive career resources, networking events, and professional development programs designed to propel your career forward.</li>
                        <li> Lifelong Learning: Continue your education with access to seminars, webinars, and workshops that keep you at the forefront of your field.</li>
                        <li>Events: From reunions to networking dinners, participate in events that celebrate your achievements and the legacy of GNC.</li>
                        <li>Mentorship: Give back by mentoring current students, providing them with the guidance and insight that can only come from someone who has walked the path before.</li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h2>How to Get Involved</h2>
                    <p>Getting involved with the GNC alumni network is easy and rewarding. Whether you’re looking to network, continue your education, or give back, there’s a place for you here. Here's how you can start:</p>
                    <ul>
                        <li>Register: Update your contact information to ensure you receive the latest news, event invitations, and opportunities tailored to your interests.</li>
                        <li>Attend Events: Join us for a variety of alumni events throughout the year to reconnect with peers and make new connections.</li>
                        <li>Mentor: Share your experience and expertise by becoming a mentor to current GNC students.</li>
                        <li>Contribute: Consider giving back to GNC through volunteering, donations, or by participating in alumni panels and guest lectures.</li>
                    </ul>
                </div>
                <h1>Keep Us Updated</h1>
                <li>Your journey is a source of inspiration to the GNC community. Share your successes, milestones, and stories with us. Your achievements highlight the value of a GNC education and motivate current and future students.</li>
                <li>As a GNC alumnus, you carry the spirit and values of our institution wherever you go. The connections you make, the paths you pave, and the successes you achieve all contribute to the rich tapestry of our collective legacy.</li>
            </div>
            <!-- <button href="alumni_registration.php">Register Now</button> -->
        </div>
    </section>
    
    <footer class="footer bg-dark text-white text-center py-3">
        <p>Copyright © 2024 GNC, Dehradun</p>
    </footer>
</body>

</html>
