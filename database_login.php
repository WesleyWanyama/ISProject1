<?php

function getData($sql){
$servername = '127.0.0.1';
$serveruser = 'root';
$serverpassword = '';
$database = 'is_project1';

$conn = mysqli_connect($servername,$serveruser,$serverpassword,$database);
	$multiple_rows = [];
	if($conn!=false){
		$result = mysqli_query($conn,$sql);
		while($row = mysqli_fetch_assoc($result)){
			array_push($multiple_rows, $row);
		}
		mysqli_close($conn);
	}
	return $multiple_rows;
}



?> 