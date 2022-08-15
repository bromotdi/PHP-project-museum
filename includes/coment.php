<?php
    $link = mysqli_connect('localhost', 'root', '', 'museum');
    $name=$_POST['name'];
    $email=$_POST['email'];
    $coment=$_POST['coment'];
    $query1="SELECT * FROM coments WHERE email='".$email."'";
    $result1=mysqli_query($link , $query1);
    $records1 = mysqli_num_rows($result1);
    if($records1==0) {
        $query1="INSERT INTO coments (name,email,coment) VALUES ('$name','$email','$coment')";
        mysqli_query($link , $query1);
        header("location:../index.php");
    } 
    else {
        header("location:../index.php");
    }
?>