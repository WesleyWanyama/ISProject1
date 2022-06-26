<?php
//File to set user session and redirect rider to dashboard after login process is validated
session_start();
if(isset($_POST['login']))
{
	extract($_POST);
	include 'database_login.php';
	$sql = "SELECT * FROM rider where national_id_number = '$national_id_number' and password = '$password'";
	$result = mysqli_query($conn,$sql);

	if(mysqli_num_rows($result)>0){
		while($row = mysqli_fetch_assoc($result)){
			$_SESSION["Rider_ID"] = $row['rider_id'];
			$_SESSION["first_name"] = $row['first_name'];
			$_SESSION["last_name"] = $row['last_name'];
			$_SESSION["national_id_number"] = $row['national_id_number'];
			$_SESSION["password"] = $row['password'];
			/*header("Location: C:/xamp/htdocs/ISProject1/View/rider_dashboard.php");*/
		}
	}else{
		echo "Invalid ID or Password!!";
	}
}
?>