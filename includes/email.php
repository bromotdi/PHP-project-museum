<?php
    $link = mysqli_connect('localhost', 'root', '', 'museum');
    $email=$_POST['email'];
    $name=$_POST['name'];
    $query1="SELECT * FROM users WHERE email='".$email."'";
    $result1=mysqli_query($link , $query1);
    $records1 = mysqli_num_rows($result1);
    if($records1==0) {
        $query1="INSERT INTO users (name,email) VALUES ('$name','$email')";
        mysqli_query($link , $query1);
        
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
        
        
        $mail->msgHTML("<html><body>
                <h1>Здравствуйте!</h1>
                <p>Это тестовое письмо.</p>
                </html></body>");

        $mail->AddAddress($email);
        $mail->AddAddress('museumkhanenko1@gmail.com');
        $mail->Send(); 
        
        header("location:../index.php");
    }

    else {
        header("location:../index.php");
    }
?>

