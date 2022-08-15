<?php
	$link = mysqli_connect('localhost', 'root', '', 'museum');

	$id = $_POST['_id'];
	$nameUser = $_POST['nameUser'];
	$email=$_POST['email'];
	$coment=$_POST['coment'];
    $answer=$_POST['answr'];
	require_once('../PHPMailer/PHPMailerAutoload.php');
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
        
        
    $mail->msgHTML("<html><body>
                <h1>Здравствуйте!</h1>
                <p>Это тестовое письмо.</p> 
                <p>Мой ответ: </p> 
                ".$answer."
                </html></body>");
    
   

    $mail->AddAddress($email);
    $mail->AddAddress('museumkhanenko1@gmail.com');
    $mail->Send(); 
	
	echo '<script type="text/javascript">alert("Collection Updated Succesfully");window.location=\'coment.php\';</script>';
?>