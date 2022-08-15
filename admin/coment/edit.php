<?php
	$link = mysqli_connect('localhost', 'root', '', 'museum');

	$id = $_POST['_id'];
	$nameUser = $_POST['nameUser'];
	$email=$_POST['email'];
	$coment=$_POST['coment'];
	
	$query1="UPDATE coments SET name='$nameUser', email='$email', coment='$coment' WHERE id_user='$id'";
    mysqli_query($link , $query1);
	
	echo '<script type="text/javascript">alert("Collection Updated Succesfully");window.location=\'coment.php\';</script>';
?>