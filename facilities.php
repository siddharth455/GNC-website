<style>
    /* Ensures text is readable without the black box overlay */
    .infra-content {
        color: #ffffff;
        /* Subtle shadow makes white text visible on light parts of images */
        text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7); 
        max-width: 800px; /* Limits width for better readability */
    }

    .infra-content h2 {
        font-weight: 700;
        font-size: 2.5rem;
    }

    .infra-content p {
        font-size: 1.1rem;
        line-height: 1.6;
    }

    /* Optional: A very soft gradient at the bottom only to help text pop 
       without looking like a "black box" */
    .carousel-item::after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 50%;
        background: linear-gradient(to top, rgba(0,0,0,0.6) 0%, rgba(0,0,0,0) 100%);
        pointer-events: none;
    }
    
    .infra-content {
        position: relative;
        z-index: 2;
    }
</style>

<section class="infraSection-slider position-relative">
    <div class="infraSection-slider__heading">
        <div class="container">
            <div class="infraSection-slider__heading--content main-heading">
                <h2 class="mb-3"><span>Best</span> Infrastructure</h2>
                <p class="m-0">Our unmatched infrastructure functions as a ladder to our student's success and makes them future-ready.</p>
            </div>
        </div>
    </div>
    
    <div id="carouselExampleCaptions" class="carousel slide h-100" data-bs-ride="false">
        <div class="carousel-inner h-100">

            <!-- Slide 1: Hostels -->
            <div class="carousel-item h-100 active" style="background-image: url('upload/infra/5l.webp'); background-size: cover; background-repeat: no-repeat; background-position: center right;">
                <div class="container h-100 d-flex align-items-end">
                    <div class="infra-content">
                        <h2 class="p-4">Home-like Hostels</h2>
                        <p class="p-4">Guru Nanak College provides well-equipped on-campus residence facilities with separate hostels for boys and girls, ensuring a safe and comfortable living environment. The hostels offer single, double, triple, and four-bed occupancy options, catering to students' preferences and needs.</p>
                    </div>
                </div>
            </div>

            <!-- Slide 2: Libraries -->
            <div class="carousel-item h-100" style="background-image: url('upload/infra/2l.webp'); background-size: cover; background-repeat: no-repeat; background-position: center right;">
                <div class="container h-100 d-flex align-items-end">
                    <div class="infra-content">
                        <h2 class="p-4">Grand Libraries</h2>
                        <p class="pb-4 ps-4 pe-4">Guru Nanak College offers a well-equipped library system that supports academic and research excellence. The Central Library serves as a vital resource center, housing an extensive collection of books, journals, research papers, theses, and training manuals across various disciplines.</p>
                        <p class="pb-4 ps-4 pe-4">In addition to its vast physical collection, the Digital Library provides access to e-books, e-journals, databases, and advanced software, ensuring seamless learning through modern technology.</p>
                    </div>
                </div>
            </div>

            <!-- Slide 3: Computer Centre -->
            <div class="carousel-item h-100" style="background-image: url('upload/infra/1l.webp'); background-size: cover; background-repeat: no-repeat; background-position: center right;">
                <div class="container h-100 d-flex align-items-end">
                    <div class="infra-content">
                        <h2 class="p-4">World-class Computer Centre</h2>
                        <p class="pt-4 ps-4 pe-4">Guru Nanak College offers cutting-edge computer education, equipping students with industry-relevant skills and hands-on expertise. Our state-of-the-art computer labs, advanced software, and experienced faculty ensure a comprehensive learning experience. The curriculum is designed to align with the latest technological advancements, fostering innovation and problem-solving abilities.</p>
                    </div>
                </div>
            </div>

            <!-- Slide 4: Auditorium -->
            <div class="carousel-item h-100" style="background-image: url('upload/infra/4l.webp'); background-size: cover; background-repeat: no-repeat; background-position: center right;">
                <div class="container h-100 d-flex align-items-end">
                    <div class="infra-content">
                        <h2 class="p-4">Auditorium</h2>
                        <p class="p-4">Guru Nanak College features a modern auditorium with a seating capacity of 500, designed to host academic, cultural, and professional events. Equipped with advanced audio-visual technology and superior acoustics, the auditorium provides an ideal space for seminars, conferences, workshops, and performances.</p>
                    </div>
                </div>
            </div>

            <!-- Slide 5: Transport -->
            <div class="carousel-item h-100" style="background-image: url('upload/infra/6l.webp'); background-size: cover; background-repeat: no-repeat; background-position: center right;">
                <div class="container h-100 d-flex align-items-end">
                    <div class="infra-content">
                        <h2 class="p-4">Transport</h2>
                        <p class="p-4">Guru Nanak College ensures a safe, reliable, and comfortable transport service for its day scholars through a fleet of self-owned, well-maintained luxury buses. These buses operate on multiple routes across the city, providing seamless connectivity for students from various locations.</p>
                    </div>
                </div>
            </div>

            <!-- Slide 6: Medical -->
            <div class="carousel-item h-100" style="background-image: url('upload/infra/3l.webp'); background-size: cover; background-repeat: no-repeat; background-position: center right;">
                <div class="container h-100 d-flex align-items-end">
                    <div class="infra-content">
                        <h2 class="p-4">Medical Facilities</h2>
                        <p class="p-4">Guru Nanak College is committed to providing prompt and reliable healthcare support for its students. The college has tie-ups with renowned hospitals in the district, including Max Healthcare and Shri Mahant Indiresh Hospital, ensuring immediate medical attention when required.</p>
                    </div>
                </div>
            </div>

        </div>

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>