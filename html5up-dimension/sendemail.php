<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Set the recipient email address
    $to = "airevivo@gmail.com";

    // Set the subject of the email
    $subject = "New Contact Form Submission";

    // Build the email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message";

    // Set additional headers
    $headers = "From: $email";

    // Send the email
    mail($to, $subject, $email_content, $headers);
}
?>
