<?php
	
	$link = mysqli_connect('localhost', 'root', '', 'museum');
	$id = $_POST['_id'];
	$query="DELETE FROM collection WHERE id_exhibit='$id'";
    mysqli_query($link , $query);
	echo '<script type="text/javascript">alert("Object Deleted Succesfully");window.location=\'catalog.php\';</script>';
	
?>