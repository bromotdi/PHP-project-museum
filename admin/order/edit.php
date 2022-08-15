<?php
	$link = mysqli_connect('localhost', 'root', '', 'museum');

	$id = $_POST['_id'];
	$names = $_POST['names'];
	$email=$_POST['email'];
	$project = $_POST['project'];
	$date=$_POST['date'];
	$status=$_POST['status'];
	$benefits=$_POST['benefits'];
	$coments=$_POST['coments'];
	
	$query1="UPDATE orders SET names='$names', email='$email', id_project='$project', date='$date', id_status='$status', id_benefits='$benefits', coments='$coments' WHERE id_user='$id'";
    mysqli_query($link , $query1);
	
	echo '<script type="text/javascript">alert("Collection Updated Succesfully");window.location=\'order.php\';</script>';
?>