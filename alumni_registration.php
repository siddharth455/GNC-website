<?php
session_start();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/webp" href="images/logog.webp">
    <title>Alumni Registration Form | Guru Nanak College, Dehradun</title>
    <link rel="stylesheet" href="css/css/bootstrap.min.css">
    <style>
        body {
            background-color: #333;
        }

        form {
            background-color: #fff;
            padding: 20px;
            max-width: 90%;
            margin: 0 auto;
            border-bottom-right-radius: 10px;
            border-bottom-left-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .card-header.logo-images {
            max-width: 90%;
            background-color: chocolate;
            margin: 0% auto;
            text-align: center;
            height: 100px;
            border-top-right-radius: 10px;
            border-top-left-radius: 10px;
        }

        .card-header img {
            max-width: 13%;
            padding: 10px;
        }

        .card-header.heading {
            color: #ffff;
            font-weight: bolder;
            text-align: center;
            font-size: 35px;
            background-color: #608ebf;
        }

        .card-header {
            color: #fff;
            border-bottom: 2px solid #ccc;
            padding-bottom: 10px;
            margin-bottom: 20px;
            font-size: 27px;
            background-color: #608ebf;
            border-radius: 8px;
        }

        @media (max-width: 768px) {
            .card-header.heading {
                font-size: 25px;
            }
            .card-header img {
            max-width: 50%;
            padding: 10px;
        }
        
        .card-header {
            
            font-size: 23px;
          
        }
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="number"],
        input[type="date"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background-image: url('data:image/svg+xml;utf8,<svg fill="#333" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M7 10l5 5 5-5z"/><path d="M0 0h24v24H0z" fill="none"/></svg>');
            background-position: right 10px top 50%;
            background-repeat: no-repeat;
            background-size: 24px;
        }

        input[type="radio"],
        input[type="checkbox"] {
            margin-right: 5px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 12px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 25px;
            text-align: center;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .req::after {
            content: " *";
            color: red;
            font-size: 18px;
        }

        .panel-body {
            padding: 10px;
        }

        .hidden {
            display: none;
        }
    </style>
</head>

<body>
    <div class="card-header logo-images">
        <img src="images/logo.webp" alt="">
    </div>

    <form action="alumni_backend.php" method="post">
        <?php
        // $_SESSION['msg']="Submitted Successfully";
        if (isset($_SESSION['msg'])) { ?>

            <div class="alert alert-success text-center" role="alert">
                <?php echo $_SESSION['msg']; ?>
            </div>
        <?php
        }
        unset($_SESSION['msg']);
        ?>
        <div class="card">
            <div class="card-header heading">
                Alumni Registration Form
            </div>
            <div class="panel-body">
                <div class="card">
                    <div class="card-header">
                        Personal Information
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <label for="FullName" class="req">Full Name</label>
                                <input type="text" id="FullName" name="FullName" placeholder="Full Name" required>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <label for="email" class="req">Email</label>
                                <input type="email" id="email" name="email" placeholder="xyz@gmail.com" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <label for="dob" class="req">Date of Birth</label>
                                <input type="date" id="dob" name="dob" required>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <label for="gender" class="req">Gender</label>

                                <select name="gender" id="gender" required>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <label for="phoneNo" class="req">Contact Number</label>
                                <input type="number" id="phoneNo" name="phoneNo" placeholder="1234567899" required>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <label for="address" class="req">Address</label>
                                <textarea id="address" name="address" rows="1" cols="50" placeholder="xyz, Dehradun, india"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <br>

                <div class="card">
                    <div class="card-header">
                        Educational Information
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <label for="yog" class="req">Year of Graduation</label>
                                <input type="number" id="yog" name="yog" min="1990" max="<?php echo date('Y'); ?>" value="<?php echo date('Y'); ?>" required>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <label for="degree" class="req">Degree Obtained</label>
                                <input type="text" id="degree" name="degree" required>
                            </div>
                        </div>
                        <label for="branch" class="req">Branch/Department</label>
                        <input type="text" id="branch" name="branch" required>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <label for="idNo" class="req">Student ID Number</label>
                                <input type="number" id="idNo" name="idNo" required>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <label for="enrollmentNo" class="req">Student Enrollment Number</label>
                                <input type="number" id="enrollmentNo" name="enrollmentNo" required>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-header">
                        Professional Information
                    </div>
                    <div class="panel-body">
                        <input type="radio" id="working" name="employment_status" value="Working" onchange="toggleFormVisibility()">
                        <label for="working">Working</label>

                        <input type="radio" id="unemployed" name="employment_status" value="Unemployed" onchange="toggleFormVisibility()">
                        <label for="unemployed">Unemployed</label>

                        <input type="radio" id="others" name="employment_status" value="Other" onchange="toggleFormVisibility()">
                        <label for="other">Others</label>
                    </div>

                    <div class="panel-body">
                        <div id="employmentForm" class="hidden">
                            <label for="company">Company/Organization</label>
                            <input type="text" id="company" name="company">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="jobTitle">Job Title</label>
                                    <input type="text" id="jobTitle" name="jobTitle">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="industry">Industry Sector</label>
                                    <input type="text" id="industry" name="industry">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="workemail">Work Email</label>
                                    <input type="email" id="workemail" name="workemail">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="wphone">Work Phone Number</label>
                                    <input type="number" id="wphone" name="wphone">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-header">
                        Alumni Association Participation
                    </div>
                    <div class="panel-body">
                        <label for="activities" class="req">Are you interested in participating in alumni events and activities?</label>
                        <label for="yes">Yes</label>
                        <input type="radio" id="yes" name="activities" value="yes">
                        <label for="no">No</label>
                        <input type="radio" id="no" name="activities" value="no">
                        <br>
                        <br>
                        <label for="suggestion" class="req">Do You have any suggestions or ideas for alumni events or initiatives</label>
                        <input type="text" id="suggestion" name="suggestion">
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-header">
                        Additional Information
                    </div>
                    <div class="panel-body">
                        <label for="association" class="req">Would you like to receive newsletters and updates from the Alumni Association?</label>
                        <label for="yes">Yes</label>
                        <input type="radio" id="yes" name="association" value="yes">
                        <label for="no">No</label>
                        <input type="radio" id="no" name="association" value="no">
                        <br>
                        <br>
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="sign" class="req">Signature</label>
                                <input type="text" id="sign" name="sign" placeholder="Full Name" required>
                            </div>
                            <div class="col-sm-6">
                                <label for="date" class="req">Date</label>
                                <input type="date" id="date" name="date" required>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            </div>
            <input type="submit" id="submitBtn" value="Submit">
        </div>
    </form>
    <script>
        function toggleFormVisibility() {
            // Check the selected employment status
            var status = document.querySelector('input[name="employment_status"]:checked').value;
            var form = document.getElementById('employmentForm');

            // Show the form if "Working" or "Others" is selected, otherwise hide it
            if (status === 'Working' || status === 'Other') {
                form.classList.remove('hidden');
            } else {
                form.classList.add('hidden');
            }
        }
    </script>
</body>

</html>