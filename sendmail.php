<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "deniel.kalchev1@gmail.com"; // Replace with your email
    $subject = "Contact Form Submission";
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);
    $headers = "From: $email\r\nReply-To: $email\r\n";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for contacting us!";
    } else {
        echo "Sorry, your message could not be sent.";
    }
}
?>