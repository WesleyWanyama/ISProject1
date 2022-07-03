<?php
session_start();
//If the session is not started, redirect to the login page
if(!isset($_SESSION['user_details']))
{
  header('Location:rider_login.php');
}
  $firstname = $_SESSION['user_details']['first_name'];
  $lastname = $_SESSION['user_details']['last_name'];
  $fullname = $firstname." ".$lastname;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Application History</title>
</head>
<body>

</body>
</html>