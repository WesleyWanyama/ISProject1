<?php

require_once('database_login.php');


	$nationalid = $_POST['national_id_number'];
	$pass = $_POST['password'];

	$sql = "SELECT * FROM rider where national_id_number='$nationalid' AND password='$pass'";
	$result = mysqli_query($conn,$sql);

	if(mysqli_num_rows($result) > 0)
	{
		session_start();
		$_SESSION['username'] = $nationalid;
		header("Location: rider_dashboard.php");
	}
	else
	{
		$_SESSION['status'] = 'Invalid national id or password!!';
		header('Location: rider_login.php');
	}


?>