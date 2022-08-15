<?php
	
	$link = mysqli_connect('localhost', 'root', '', 'museum');
	$id = $_POST['_id'];
	$query="DELETE FROM coments WHERE id_user='$id'";
    mysqli_query($link , $query);
	echo '<script type="text/javascript">alert("Object Deleted Succesfully");window.location=\'coment.php\';</script>';
	
?>