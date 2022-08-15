<?php
	$link = mysqli_connect('localhost', 'root', '', 'museum');
	$id = $_POST['_id'];
	$name = $_POST['name'];
	$description=$_POST['description'];
	$photo=$_POST['photo'];
    $query1="INSERT INTO project (id_project,name,description,photo) VALUES ('$id','$name','$description','$photo')";
    mysqli_query($link , $query1);
	echo '<script type="text/javascript">alert("Added new object succesfully");window.location=\'project.php\';</script>';
?>