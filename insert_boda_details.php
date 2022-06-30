<?php

require_once('database.php');

if(isset($_POST) & !empty($_POST)){
	$number_plate = $database->sanitize($_POST['number_plate']);
	$KRA_pin = $database->sanitize($_POST['KRA_pin']);
	$make = $database->sanitize($_POST['make']);
	$model = $database->sanitize($_POST['model']);
	$weight = $database->sanitize($_POST['weight']);
	$county = $database->sanitize($_POST['county']);;
	//Handling of the file upload
    $fileName = $_FILES['certificate_of_good_conduct']['name'];
    $tmpName = $_FILES['certificate_of_good_conduct']['tmp_name'];
    $fileSize = $_FILES['certificate_of_good_conduct']['size'];
    $fileType = $_FILES['certificate_of_good_conduct']['type'];
    //opening the file
    $fp = fopen($tmpName, 'r');
    $certificate_of_good_conduct = fread($fp, filesize($tmpName));
    fclose($fp);

}
$result = $database->registerBoda($number_plate,$KRA_pin,$certificate_of_good_conduct,$make,$model,$weight,$county);
if($result){
	echo "Successfully inserted data";
}else{
	echo "failed to insert data";
}

?>