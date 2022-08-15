<?php
	$link = mysqli_connect('localhost', 'root', '', 'museum');

	$id = $_POST['_id'];
	$nameCollection = $_POST['nameCollection'];
	$description=$_POST['description'];
	$photo=$_POST['photo'];
	
	$query1="UPDATE collection SET id_collection='$nameCollection', name='$description', photo='$photo' WHERE id_exhibit='$id'";
    mysqli_query($link , $query1);
	
	echo '<script type="text/javascript">alert("Collection Updated Succesfully");window.location=\'catalog.php\';</script>';
?>