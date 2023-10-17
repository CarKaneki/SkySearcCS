<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $recipient_email = "your_email@example.com"; // Replace with your email address

    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $subject = "Customer Support Request from $name";
    $headers = "From: $email";

    if (mail($recipient_email, $subject, $message, $headers)) {
        echo "Thank you for your message. We will get back to you soon.";
    } else {
        echo "There was an error sending your message.";
    }
}
?>
