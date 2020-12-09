<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'crud');

	// initialize variables
	$name = "";
	$discription = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$discription = $_POST['discription'];

		mysqli_query($db, "INSERT INTO info (name, discription) VALUES ('$name', '$discription')"); 
		$_SESSION['message'] = "Description saved"; 
		header('location: index.php');
	}