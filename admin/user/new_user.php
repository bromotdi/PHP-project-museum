<?php
	$link = mysqli_connect('localhost', 'root', '', 'museum');
	$id = $_POST['_id'];
	$nameUser = $_POST['nameUser'];
	$email=$_POST['email'];
	$query1="SELECT * FROM users WHERE email='".$email."'";
    $result1=mysqli_query($link , $query1);
    $records1 = mysqli_num_rows($result1);
    if($records1==0) {
		 $query1="INSERT INTO users (id_user,name,email) VALUES ('$id','$nameUser','$email')";
		 mysqli_query($link , $query1);
	}
	echo '<script type="text/javascript">alert("Added new object succesfully");window.location=\'user.php\';</script>';
?>

