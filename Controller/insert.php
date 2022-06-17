<?php

require_once('C:\xamp\htdocs\ISProject1\Model\database.php');

if(isset($_POST) & !empty($_POST)){
	$first_name = $database->sanitize($_POST['first_name']);
	$last_name = $database->sanitize($_POST['last_name']);
	$national_id_number = $database->sanitize($_POST['national_id_number']);
	$password = $database->sanitize($_POST['password']);
	$profile_picture = $database->sanitize($_POST['profile_picture']);
}

$result = $database->create($first_name,$last_name,$national_id_number,$password,$profile_picture);
if($result){
	echo "Successfully inserted data";
}else{
	echo "failed to insert data";
}

?>