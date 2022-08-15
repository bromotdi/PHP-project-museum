<?php
	$id = $_POST['_id'];
	$name = $_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];
mail($email, 'Музей Ханенків', $message);
echo '<script type="text/javascript">window.location=\'comments.php\';</script>';
?>