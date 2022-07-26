 <?php
session_start();
//If the session is not started, redirect to the login page
if(!isset($_SESSION['admin_details']))
{
  header('Location:admin_login.php');
}
  $username = $_SESSION['admin_details']['username'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/7571e7ef19.js" crossorigin="anonymous"></script>
	<title>Admin Dashboard</title>
</head>
<body>
 
	<!-- Top Bar Showing admin info -->
	<section id="topbar" class="d-flex align-items-center" style="height: 60px; background-color: #0C7018;">
    <?php echo '<h4 style="margin-left: 20px; color: white;">'. "Welcome"." ".$username.'</h4>';?>
  </section> 

    <!-- NAV BAR -->
    <nav class="navbar navbar-expand-md navbar-light bg-light">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="admin_dashboard.php"><i class="fa-solid fa-grid-horizontal"></i>Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="registered_riders.php">View Registered Riders</a>
        </li>
        <li class="nav-item" >
          <a class="nav-link active" aria-current="page" href="view_boda_details.php"><i class="fa-solid fa-rectangle-history"></i>Submitted Boda Details</a>
        </li>
      </ul>
    </div>
    <a href="rider_logout.php"><button type="button" class="btn btn-secondary">Logout</button></a>
  </div>
</nav>
<!-- PHP CODE TO GET THE NUMBER OF ROWS FROM THE TABLES -->
<?php
require_once('procedural_db_connection.php');
//number of registered Riderss
$sql = "SELECT * FROM rider";
if($result = mysqli_query($conn,$sql)){
  $rowcount = mysqli_num_rows($result);
}
//number of registration applications
$sql2 = "SELECT * FROM registration_details";
if($result2 = mysqli_query($conn,$sql2)){
  $rowcount2 = mysqli_num_rows($result2);
}
//number of registered motorocycles
$sql3 = "SELECT * FROM boda_bodas";
if($result3 = mysqli_query($conn,$sql3)){
  $rowcount3 = mysqli_num_rows($result3);
}
?>
<!-- DISPLAY OF DATA INFORMATION -->
<div class="row align-items-center" style="margin-top:50px; margin-left: 10px; margin-right: 10px;">
    <div class="col" style="background-color: green; height: 130px;">
      <h3 style="color: white;">Number of Registered Riders:</h3><br><br>
      <h5 style="text-align:center; color: white;"><?php echo $rowcount;?></h5>
    </div>
    <div class="col" style="background-color: green; height: 130px; margin-left: 20px;">
      <h3 style="color: white;">Number of Registration Applications:</h3><br>
      <h5 style="text-align:center; color: white;"><?php echo $rowcount2;?></h5>
      
    </div>
    <div class="col" style="background-color: green; height: 130px; margin-left:20px;">
      <h3 style="color: white;">Number of Registered Motorcycles:</h3><br>
      <h5 style="text-align:center; color: white;"><?php echo $rowcount3;?></h5>
    </div>
  </div>
   
</body>

</html>