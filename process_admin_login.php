<?php 
 
require_once('database_login.php');  


	$username = $_POST['username']; 
	$pass = $_POST['password'];

	$sql = "SELECT * FROM admin where username='$username' AND password='$pass'";
	$admin_details = getData($sql);
	if(sizeof($admin_details)>0){
		session_start();
		$_SESSION['admin_details'] = $admin_details[0];
		header("Location: admin_dashboard.php");
	}else{
		$_SESSION['status'] = 'Invalid Username or Password';
		header('Location: admin_login.php'); 
	}


?>