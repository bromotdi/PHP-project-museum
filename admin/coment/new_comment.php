<?php
	$link = mysqli_connect('localhost', 'root', '', 'museum');
	$id = $_POST['_id'];
	$name = $_POST['name'];
	$email=$_POST['email'];
	$coment=$_POST['coment'];
    $query1="INSERT INTO coments (id_user,name,email,coment) VALUES ('$id','$name','$email','$coment')";
    mysqli_query($link , $query1);
	echo '<script type="text/javascript">alert("Added new object succesfully");window.location=\'coment.php\';</script>';
?>

