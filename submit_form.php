<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Modify the following lines to send the email using PHP's mail() function or a library like PHPMailer.
    $to = "cleancrewzambia@gmail.com";
    $subject = "New Contact Form Submission";
    $messageBody = "Name: " . $name . "\nEmail: " . $email . "\nMessage: " . $message;
    $headers = "From: " . $email;

    // Uncomment the following line if you are using the mail() function.
    // mail($to, $subject, $messageBody, $headers);

    // Send a response back to the client (optional)
    echo "Message sent successfully!";
}
?>
