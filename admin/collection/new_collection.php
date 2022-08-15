<?php
	$link = mysqli_connect('localhost', 'root', '', 'museum');
	$id = $_POST['_id'];
	$nameCollection = $_POST['nameCollection'];
	$description=$_POST['description'];
	$photo=$_POST['photo'];
    $query1="INSERT INTO collection (id_exhibit,id_collection,name,photo) VALUES ('$id','$nameCollection','$description','$photo')";
    mysqli_query($link , $query1);
	echo '<script type="text/javascript">alert("Added new object succesfully");window.location=\'catalog.php\';</script>';
?>