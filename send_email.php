<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $subject = $_POST['subject'];
    $message = $_POST['note'];

    $to = 'uscollection74@gmail.com'; // Replace with your email address

    $headers = "From: $email" . "\r\n" .
        "Reply-To: $email" . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    $messageBody = "Name: $name\nEmail: $email\nAddress: $address\nMessage: $message";

    if (mail($to, $subject, $messageBody, $headers)) {
        echo '<div id="success">Thank you for your message. We will get back to you soon!</div>';
    } else {
        echo '<div id="error">Error occurred while sending email. Please try again later.</div>';
    }
}
?>
