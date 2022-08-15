<?php
    $link = mysqli_connect('localhost', 'root', '', 'museum');
    $names=$_POST['names'];
    $email=$_POST['email'];
    $project=$_POST['project'];
    $date=$_POST['date'];
    $status=$_POST['status'];
    $benefits=$_POST['benefits'];
    $coment=$_POST['coment'];
    $query1="SELECT * FROM orders WHERE email='".$email."'";
    $result1=mysqli_query($link , $query1);
    $records1 = mysqli_num_rows($result1);
    if($records1==0) {
        $query1="INSERT INTO orders (names,email,id_project,date,id_status,id_benefits,coments) VALUES ('$names','$email','$project','$date','$status','$benefits','$coment')";
        mysqli_query($link , $query1);
        header("location:../index.php");
    } 
    else {
        header("location:../index.php");
    }
?>