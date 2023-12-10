<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = 'toka.saad@outlook.com';
$subject = 'Portfolio - New Contact Form Submission';
$headers = "From: $email";

mail($to, $subject, $message, $headers);

// Optionally, you can redirect the user to a thank you page.
echo "<script>alert('Thank you for your message!'); window.history.go(-1);</script>";
?>
exit();
?>
