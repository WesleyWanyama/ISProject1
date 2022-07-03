<?php 
 
require_once('database.php');

if(isset($_POST) & !empty($_POST)){
	$first_name = $database->sanitize($_POST['first_name']);
	$last_name = $database->sanitize($_POST['last_name']);
	$national_id_number = $database->sanitize($_POST['national_id_number']);
	$password = $database->sanitize($_POST['password']);
	$profile_picture = $_FILES["profile_picture"]['name'];
}
 
$result = $database->registerRider($first_name,$last_name,$national_id_number,$password,$profile_picture);
if($result){
	//Move the image to images folder
	move_uploaded_file($_FILES["profile_picture"]["tmp_name"],"images/".$_FILES["profile_picture"]["name"]);
	echo "Successfully inserted data";
}else{
	echo "failed to insert data";
}

?>