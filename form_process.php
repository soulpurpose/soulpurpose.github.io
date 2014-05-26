<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "pgspdc@gmail.com";
$subject = "New Message";

mail ($to, $subject, $message, "From: " . $name);
echo "Your message has been sent!";
?>