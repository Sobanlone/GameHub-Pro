<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "sobanlone786@gmail.com";
    $subject = "Contact Us Form Submission from $name";
    $headers = "From: $email";
    
    $mailSent = mail($to, $subject, $message, $headers);

    if ($mailSent) {
        echo "Thank you for your message. We'll be in touch shortly.";
    } else {
        echo "There was an error sending your message. Please try again later.";
    }
}
?>
