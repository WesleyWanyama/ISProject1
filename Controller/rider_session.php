<?php

require_once('C:\xamp\htdocs\ISProject1\Model\database.php');

$national_id_number = $_POST['national_id_number'];
$password = $_POST['password'];

$sql = "SELECT * FROM rider where national_id_number='$national_id_number' and password='$password'";

$user_details = $database->getData($sql);
if(sizeof($user_details)>0){
	session_start();
	$_SESSION['user_details'] = $user_details[0];
	header('Location:C:\xamp\htdocs\ISProject1\View\rider_dashboard.php');
}else{
	header('Location:C:\xamp\htdocs\ISProject1\View\rider_login.php');
}

echo "WELCOME WES!!";
?>