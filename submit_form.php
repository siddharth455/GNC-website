<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect post data from form
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $education = $_POST['education'];
    $location = $_POST['location'];
    $jobRole= $_POST['jobRole'];

    // Handle file upload - assuming a single file and server is configured to handle uploads
    $resume = $_FILES['resume']['tmp_name'];
    $resume_content = chunk_split(base64_encode(file_get_contents($resume)));
    $filename = $_FILES['resume']['name'];

    // Define the email content
    $body = "First Name: $firstName\n";
    $body .= "Last Name: $lastName\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n";
    $body .= "Date of Birth: $dob\n";
    $body .= "Gender: $gender\n";
    $body .= "Education Background: $education\n";
    $body .= "Job Role: $jobRole\n";
    $body .= "Location: $location\n";


    // Create MIME boundary
    $semi_rand = md5(time());
    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

    // Additional headers
    $headers = "From: $firstName $lastName\r\n";
    $headers .= "Reply-To: <$email>\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: multipart/mixed; boundary=\"{$mime_boundary}\"\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";

    // Add SPF and DKIM headers
    $headers .= "SPF-Record: your-domain.com: v=spf1 include:_spf.google.com ~all\r\n";
    $headers .= "DomainKey-Signature: a=rsa-sha1; c=nofws; d=your-domain.com; s=dkim; h=Date:From:To:Subject; q=dns; b=your-dkim-signature\r\n";

    // Email body with attachment
    $message = "--{$mime_boundary}\r\n" .
        "Content-Type: text/plain; charset=\"iso-8859-1\"\r\n" .
        "Content-Transfer-Encoding: 7bit\r\n\r\n" .
        $body . "\r\n\r\n";
    $message .= "--{$mime_boundary}\r\n" .
        "Content-Type: application/octet-stream;\r\n" .
        " name=\"{$filename}\"\r\n" .
        "Content-Disposition: attachment;\r\n" .
        " filename=\"{$filename}\"\r\n" .
        "Content-Transfer-Encoding: base64\r\n\r\n" .
        $resume_content . "\r\n\r\n" .
        "--{$mime_boundary}--\r\n";

    // Send the email
    $to = 'cv@gnc.edu.in'; // sunilbfit2.0@gmail.com cv@gnc.edu.in
    $subject = 'Job Application Form Submission : '.$jobRole;

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully";
    } else {
        echo "Email sending failed";
    }
}
?>
