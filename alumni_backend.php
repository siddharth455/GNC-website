<?php
session_start();

// Database connection variables
$servername = "localhost";
$username = "alumni";
$password = "Alumni#2024#";
$dbname = "alumni_info";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO alumni_info (FullName, email, dob, gender, phoneNo, address, yog, degree, branch, idNo, enrollmentNo, employment_status, company, jobTitle, industry, workemail, wphone, activities, suggestion, association, sign, date) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

$stmt->bind_param("ssssssssssssssssssssss", $FullName, $email, $dob, $gender, $phoneNo, $address, $yog, $degree, $branch, $idNo, $enrollmentNo, $employment_status, $company, $jobTitle, $industry, $workemail, $wphone, $activities, $suggestion, $association, $sign, $date);

// Set parameters and execute
$FullName = $_POST['FullName'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$phoneNo = $_POST['phoneNo'];
$address = $_POST['address'];
$yog = $_POST['yog'];
$degree = $_POST['degree'];
$branch = $_POST['branch'];
$idNo = $_POST['idNo'];
$enrollmentNo = $_POST['enrollmentNo'];
$employment_status = $_POST['employment_status'];
$company = isset($_POST['company']) ? $_POST['company'] : NULL;
$jobTitle = isset($_POST['jobTitle']) ? $_POST['jobTitle'] : NULL;
$industry = isset($_POST['industry']) ? $_POST['industry'] : NULL;
$workemail = isset($_POST['workemail']) ? $_POST['workemail'] : NULL;
$wphone = isset($_POST['wphone']) ? $_POST['wphone'] : NULL;
$activities = $_POST['activities'];
$suggestion = isset($_POST['suggestion']) ? $_POST['suggestion'] : NULL;
$association = $_POST['association'];
$sign = $_POST['sign'];
$date = $_POST['date'];

if ($stmt->execute()) {
    $_SESSION['msg'] = "Submitted Successfully";
} else {
    $_SESSION['msg'] = "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();

header("Location: alumni_registration.php"); // Redirect back to the form page or to a success page
exit();
?>
