<?php
	$link = mysqli_connect('localhost', 'root', '', 'museum');

	$id = $_POST['_id'];
	$name = $_POST['name'];
	$description=$_POST['description'];
	$photo=$_POST['photo'];
	
	$query1="UPDATE project SET name='$name', description='$description', photo='$photo' WHERE id_project='$id'";
    mysqli_query($link , $query1);
	
	echo '<script type="text/javascript">alert("Collection Updated Succesfully");window.location=\'project.php\';</script>';
?>