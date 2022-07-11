<?php 

require_once('database.php');
 
if(isset($_POST) & !empty($_POST)){
	$rider_ID = $database -> sanitize($_POST['rider_ID']);
	$number_plate = $database->sanitize($_POST['number_plate']);
	$national_ID_number = $database->sanitize($_POST['national_ID_number']);
	$KRA_pin = $database->sanitize($_POST['KRA_pin']);
	$make = $database->sanitize($_POST['make']);
	$model = $database->sanitize($_POST['model']);
	$weight = $database->sanitize($_POST['weight']);
	$county = $database->sanitize($_POST['county']);;
	//Handling of the file upload
    $certificate_of_good_conduct = addslashes(file_get_contents($_FILES['certificate_of_good_conduct']['tmp_name']));

}
$result = $database->registerBoda($rider_ID,$number_plate,$national_ID_number,$KRA_pin,$certificate_of_good_conduct,$make,$model,$weight,$county);
if($result){
	echo "Successfully inserted data";
}else{
	echo "failed to insert data";
}

?>