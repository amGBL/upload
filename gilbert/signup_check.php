<?php
include 'conn.php';

if (isset($_POST['submit'])) {
	
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$role = 'user';

	$sql = "INSERT INTO users VALUES('','$username','$email','$password','$role')";
	$re = mysqli_query($conn,$sql);

	if ($re) {
		header('location:login.php');
	}
}
?>