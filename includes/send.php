<?php

$link = mysqli_connect('localhost', 'root', '', 'museum');
$email=$_POST['email'];

require_once('PHPMailer/PHPMailerAutoload.php');

$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->SMTPSecure = 'ssl';

$mail->Host = ' smtp.gmail.com';

$mail->Port = '465';
$mail->isHTML ();
$mail->Username = 'museumkhanenko1@gmail.com';
$mail->Password = 'dymaygolovoy';

$mail->SetFrom($email);

$mail->Subject = 'Hello World';
$mail->Body = 'A test !';


$mail->AddAddress($email);
$mail->AddAddress('museumkhanenko1@gmail.com');

$mail->Send(); 
?>