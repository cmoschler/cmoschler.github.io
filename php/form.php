<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = 'chris@bretmor.com';
$subject = 'Website Contact Form';
$msg = $name . " " . $email . " " . $message;

mail($to, $subject, $msg);

?>