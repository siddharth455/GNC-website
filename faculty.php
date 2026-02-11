<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Founding Group | Guru Nanak College</title>

    <style>
        .page-header {
            background-color: #f8f9fa;
            padding: 40px 0;
            margin-bottom: 40px;
            border-bottom: 1px solid #e9ecef;
        }

        .page-title {
            color: #008b99;
            font-weight: 700;
            font-size: 2.5rem;
            margin: 0;
        }

        .faculty-search-container {
            position: relative;
        }

        .faculty-search-input {
            border-radius: 20px;
            padding-right: 40px;
            border: 1px solid #ddd;
        }

        .faculty-search-icon {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #17a2b8;
            cursor: pointer;
        }


        .faculty-grid {
            margin-bottom: 60px;
        }


        .faculty-card {
            background-color: #0d6e75;
            border-radius: 0;
            overflow: hidden;
            position: relative;
            height: 420px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-end;
            /* Align content to bottom */
            text-align: center;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        

        .faculty-img-wrapper {
            width: 100%;
            height: 100%;
            overflow: hidden;
            flex-shrink: 0;
            display: flex;
            align-items: flex-end;
            /* Touch bottom */
            justify-content: center;
        }

        .faculty-img {
            width: 100%;
            height: 80%;
            object-fit: cover;
            object-position: top center;
            
         }

        .faculty-info {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 20px 10px;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0.4) 60%, transparent 100%);
            color: #fff;
            z-index: 2;
        }

        .faculty-name {
            font-size: 1.25rem;
            font-weight: 700;
            margin-bottom: 5px;
            text-transform: uppercase;
        }

        .faculty-designation {
            font-size: 0.9rem;
            opacity: 0.9;
            font-weight: 500;
            line-height: 1.4;
        }

        .sidebar-link {
            display: block;
            padding: 10px 0;
            color: #17a2b8;
            text-decoration: none;
            font-weight: 500;
            font-size: 1rem;
            transition: color 0.2s;
        }

        .sidebar-link:hover {
            color: #0d6e75;
        }

        .sidebar-link.active {
            font-weight: 700;
            color: #0b5d63;
            border-left: 3px solid #0b5d63;
            padding-left: 10px;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .page-title {
                font-size: 2rem;
                text-align: center;
                margin-bottom: 20px;
            }

            .faculty-search-container {
                width: 100%;
                margin-bottom: 30px;
            }
        }
    </style>
</head>

<body>

    <?php require "common/header.php"; ?>

    <!-- Banner Image Section (Founding Community) -->
    <section class="position-relative">
        <img src="upload/infra/leader.webp" alt="Founding Community" class="img-fluid w-100"
            style="height: 450px; object-fit: cover; filter: brightness(0.6);">
        <div class="position-absolute top-50 start-50 translate-middle text-center text-white w-100 px-3">
            <h1 class="fw-bold display-3">FOUNDING<br>COMMUNITY</h1>
            <p class="mt-3 fs-5 d-none d-md-block mx-auto" style="max-width: 700px;">Our founding group brings together
                engineers, entrepreneurs and academicians as part of the initial community that has been involved in
                almost every aspect of the university's strategy, design and research. We believe in harnessing students
                from across the world into an integrated, research-led, university campus.</p>
        </div>
    </section>

    <div class="container my-5">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-lg-3 mb-4">
                <div class="sticky-top" style="top: 100px;">
                    <h4 class="mb-4 text-dark font-weight-bold">Academic Programs</h4>
                    <nav class="nav flex-column" id="programSidebar">
                        <?php
                        $programs = [
                            "all" => "All Faculty",
                            "paramedical" => "Paramedical",
                            "pharmacy" => "Pharmacy",
                            "nursing" => "Nursing",
                            "cs" => "Computer Science",
                            "agriculture" => "Agriculture Science",
                            "hm" => "Hotel Management",
                            "life-allied" => "Life & Allied Sciences"
                        ];

                        foreach ($programs as $slug => $name) {
                            $active_class = ($slug == 'all') ? 'active' : '';
                            echo "<a href='#' data-slug='$slug' data-name='$name' class='sidebar-link $active_class'>$name</a>";
                        }
                        ?>
                    </nav>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-lg-9">
                <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap">
                    <h2 class="text-teal mb-0" id="currentProgramTitle" style="color: #0d6e75;">
                        All Faculty
                    </h2>
                    <div class="faculty-search-container mt-3 mt-md-0" style="width: 250px;">
                        <input type="text" class="form-control faculty-search-input" id="facultySearch"
                            placeholder="Search by Name">
                        <i class="fas fa-search faculty-search-icon"></i>
                    </div>
                </div>

                <div class="row g-4" id="facultyEntries">
                    <?php
                    // Grouped Faculty Data Sourced from upload/faculty folder
                    $faculty_data = [
                        "paramedical" => [
                            ["name" => "Aslam", "title" => "Faculty of Paramedical", "img" => "upload/faculty/paramedical/Aslam.webp"],
                            ["name" => "Nisha", "title" => "Faculty of Paramedical", "img" => "upload/faculty/paramedical/Nisha.webp"],
                            ["name" => "Syamli", "title" => "Faculty of Paramedical", "img" => "upload/faculty/paramedical/Syamli.webp"],
                            ["name" => "Faculty Member", "title" => "Paramedical", "img" => "upload/faculty/paramedical/IMG_5600.webp"],
                            ["name" => "Faculty Member", "title" => "Paramedical", "img" => "upload/faculty/paramedical/IMG_5604.webp"],
                            ["name" => "Faculty Member", "title" => "Paramedical", "img" => "upload/faculty/paramedical/IMG_5614.webp"],
                            ["name" => "Faculty Member", "title" => "Paramedical", "img" => "upload/faculty/paramedical/IMG_5623.webp"],
                            ["name" => "Faculty Member", "title" => "Paramedical", "img" => "upload/faculty/paramedical/IMG_5625.webp"],
                            ["name" => "Faculty Member", "title" => "Paramedical", "img" => "upload/faculty/paramedical/IMG_5627.webp"],
                        ],
                        "pharmacy" => [
                            ["name" => "Faculty Member", "title" => "Pharmacy", "img" => "upload/faculty/pharmacy/IMG_5602.webp"],
                            ["name" => "Faculty Member", "title" => "Pharmacy", "img" => "upload/faculty/pharmacy/IMG_5603.webp"],
                            ["name" => "Faculty Member", "title" => "Pharmacy", "img" => "upload/faculty/pharmacy/IMG_5606.webp"],
                            ["name" => "Faculty Member", "title" => "Pharmacy", "img" => "upload/faculty/pharmacy/IMG_5609.webp"],
                            ["name" => "Faculty Member", "title" => "Pharmacy", "img" => "upload/faculty/pharmacy/IMG_5610.webp"],
                            ["name" => "Faculty Member", "title" => "Pharmacy", "img" => "upload/faculty/pharmacy/IMG_5612.webp"],
                            ["name" => "Faculty Member", "title" => "Pharmacy", "img" => "upload/faculty/pharmacy/IMG_5634.webp"],
                            ["name" => "Faculty Member", "title" => "Pharmacy", "img" => "upload/faculty/pharmacy/IMG_5635.webp"],
                        ],
                        "nursing" => [
                            ["name" => "Faculty Member", "title" => "Nursing", "img" => "upload/faculty/Nursing/IMG_5616.webp"],
                            ["name" => "Faculty Member", "title" => "Nursing", "img" => "upload/faculty/Nursing/IMG_5621.webp"],
                            ["name" => "Faculty Member", "title" => "Nursing", "img" => "upload/faculty/Nursing/IMG_5624.webp"],
                            ["name" => "Faculty Member", "title" => "Nursing", "img" => "upload/faculty/Nursing/IMG_5633.webp"],
                        ],
                        "cs" => [
                            ["name" => "Faculty Member", "title" => "Computer Science", "img" => "upload/faculty/cs/IMG_5611.webp"],
                            ["name" => "Faculty Member", "title" => "Computer Science", "img" => "upload/faculty/cs/IMG_5631.webp"],
                        ],
                        "agriculture" => [
                            ["name" => "Faculty Member", "title" => "Agriculture", "img" => "upload/faculty/Agriculture/IMG_5599.webp"],
                            ["name" => "Faculty Member", "title" => "Agriculture", "img" => "upload/faculty/Agriculture/IMG_5636.webp"],
                        ],
                        "hm" => [
                            ["name" => "Faculty Member", "title" => "Hotel Management", "img" => "upload/faculty/HM/IMG_5617.webp"],
                        ],
                        "life-allied" => [
                            ["name" => "Faculty Member", "title" => "Life & Allied Sciences", "img" => "upload/faculty/LIfe&Allied/IMG_5637.webp"],
                        ],
                    ];

                    foreach ($faculty_data as $program_slug => $members) {
                        foreach ($members as $member) {
                        ?>
                            <div class="col-md-4 col-sm-6 faculty-entry" data-program="<?php echo $program_slug; ?>">
                                <div class="faculty-card">
                                    <div class="faculty-img-wrapper">
                                        <img src="<?php echo $member['img']; ?>" alt="<?php echo $member['name']; ?>"
                                            class="faculty-img" loading="lazy">
                                    </div>
                                    <div class="faculty-info">
                                        <div class="faculty-name"><?php echo $member['name']; ?></div>
                                        <div class="faculty-designation"><?php echo $member['title']; ?></div>
                                    </div>
                                </div>
                            </div>
                        <?php 
                        }
                    } 
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const sidebarLinks = document.querySelectorAll('#programSidebar .sidebar-link');
            const facultyEntries = document.querySelectorAll('.faculty-entry');
            const programTitle = document.getElementById('currentProgramTitle');
            const searchInput = document.getElementById('facultySearch');

            function filterFaculty() {
                const activeLink = document.querySelector('#programSidebar .sidebar-link.active');
                const selectedProgram = activeLink.getAttribute('data-slug');
                const searchQuery = searchInput.value.toLowerCase();

                facultyEntries.forEach(entry => {
                    const entryProgram = entry.getAttribute('data-program');
                    const entryName = entry.querySelector('.faculty-name').textContent.toLowerCase();
                    const entryTitle = entry.querySelector('.faculty-designation').textContent.toLowerCase();

                    const matchesProgram = (selectedProgram === 'all' || entryProgram === selectedProgram);
                    const matchesSearch = (entryName.includes(searchQuery) || entryTitle.includes(searchQuery));

                    if (matchesProgram && matchesSearch) {
                        entry.style.display = "";
                    } else {
                        entry.style.display = "none";
                    }
                });
            }

            sidebarLinks.forEach(link => {
                link.addEventListener('click', function (e) {
                    e.preventDefault();
                    
                    // Update sidebar active state
                    sidebarLinks.forEach(l => l.classList.remove('active'));
                    this.classList.add('active');

                    // Update Title
                    const name = this.getAttribute('data-name');
                    programTitle.textContent = name;

                    // Filter entries
                    filterFaculty();
                });
            });

            searchInput.addEventListener('keyup', filterFaculty);
        });
    </script>

    <?php require "common/footer.php"; ?>

</body>

</html>