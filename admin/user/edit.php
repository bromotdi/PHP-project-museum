<?php
	$link = mysqli_connect('localhost', 'root', '', 'museum');

	$id = $_POST['_id'];
	$nameUser = $_POST['nameUser'];
	$email=$_POST['email'];
	
	$query1="SELECT * FROM users WHERE email='".$email."'";
    $result1=mysqli_query($link , $query1);
    $records1 = mysqli_num_rows($result1);
    if($records1==0) {
	$query1="UPDATE users SET name='$nameUser', email='$email' WHERE id_user='$id'";
    mysqli_query($link , $query1);
	}
	echo '<script type="text/javascript">alert("Collection Updated Succesfully");window.location=\'user.php\';</script>';
?>