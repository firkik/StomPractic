<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$subject = 'subject';
$message = 'Hello! We have received your appointment!';


mail($email, $subject, $message);
header('Location: /');
?>