<?php
$servername = '127.0.0.1';
$serveruser = 'root';
$serverpassword = '';
$database = 'is_project1';
$conn=mysqli_connect($servername,$serveruser,$serverpassword,$database);

if(!$conn){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	exit;
}

//Turn autocommit off
mysqli_autocommit($conn,FALSE);

//Queries
mysqli_query($conn,"UPDATE registration_details SET registration_status='Approved' WHERE registration_ID=" . $_GET["registration_id"]);
mysqli_query($conn,"INSERT INTO Boda_bodas (rider_ID,number_plate,registration_date,make,model,weight,county) SELECT rider_ID, number_plate, registration_date, make, model, weight,county FROM registration_details WHERE registration_ID=" . $_GET["registration_id"]);

//Commit transaction
if(!mysqli_commit($conn)){
	echo "Commit transaction failed";
	exit();
}

//Close connection
mysqli_close($conn);

?>