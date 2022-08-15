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
    $query1="INSERT INTO orders (id_user,names,email,id_project,date, id_status, id_benefits , coments) VALUES ('$id','$names','$email','$date','$project','$status','$benefits','$coments')";
    mysqli_query($link , $query1);
	echo '<script type="text/javascript">alert("Added new object succesfully");window.location=\'order.php\';</script>';
?>

