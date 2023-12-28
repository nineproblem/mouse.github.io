<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST["email"];
    $message = $_POST["message"];
    $phone = $_POST["phone"];
    $name = $_POST["name"];

    // Set the recipient email address
    $to = "okksoe7@gmail.com"; // Replace with the actual recipient email address

    // Set the subject of the email
    $subject = "New Form Submission";

    // Compose the message
    $emailBody = "Email: " . $email . "\n";
    $emailBody .= "Phone: " . $phone . "\n\n";
    $emailBody .= "Message:\n" . $message;

    // Set additional headers
    $headers = "From: $email  "; // Replace with the actual sender email address
    $headers .= "\r\n" . "Reply-To: okksoe7@gmail.com"; // Replace with the actual reply-to email address

    // Send the email
    $mailSuccess = mail($to, $subject, $emailBody, $headers);

    // Check if the email was sent successfully
    if ($mailSuccess) {
        echo "Form submitted successfully. We will contact you shortly.";
    } else {
        echo "Failed to submit form. Please try again later.";
    }
}

?>
