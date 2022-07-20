<?php
session_start();
//If the session is not started, redirect to the login page
if(!isset($_SESSION['admin_details']))
{
  header('Location:admin_login.php');
}
  $username = $_SESSION['admin_details']['username'];
require_once('database.php');
$result = $database->viewRegisteredRiders();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Registered Riders</title>
</head>
<body>
	<!-- Top Bar showing admin info -->
	<section id="topbar" class="d-flex align-items-center" style="height: 60px; background-color: #0C7018;">
    <?php echo '<h4 style="margin-left: 20px; color: white;">'. "Welcome"." ".$username.'</h4>';?>
  </section> 
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-md navbar-light bg-light">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="admin_dashboard.php"><i class="fa-solid fa-grid-horizontal"></i>Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="registered_riders.php"><i class="fa-solid fa-user-pen"></i>View Registered Riders</a>
        </li>
        <li class="nav-item" >
          <a class="nav-link active" aria-current="page" href="view_boda_details.php"><i class="fa-solid fa-rectangle-history"></i>Submitted Details</a>
        </li>
      </ul>
    </div>
    <a href="rider_logout.php"><button type="button" class="btn btn-secondary">Logout</button></a>
  </div>
</nav>

<!-- Table to display registered riders -->
<div class="card">
    	<div class="card-header">
    		<div class="row">
    			<div class="col">
    				<h3>Registered Riders</h3>
    			</div>
    		</div>
    	</div>
    	<div class="card-body">
    		<div class="table-responsive">
    			<table class="table table-striped table-bordered">
    				<tr>
    					<th>Rider ID</th>
    					<th>First Name</th>
    					<th>Last Name</th>
    					<th>National ID Number</th>
    					<th>Profile Picture</th>
    				</tr>
    				<?php
    				while($row = mysqli_fetch_assoc($result)){
    				?>
    				<tr>
    					<td><?php echo $row["rider_ID"]; ?></td>
    					<td><?php echo $row["first_name"]; ?></td>
    					<td><?php echo $row["last_name"]; ?></td>
    					<td><?php echo $row["national_ID_number"]; ?></td>
    					<td><?php echo '<img style="border:2px solid black; " src="images/'.$row["profile_picture"].'" width="70px;" height="70px;" alt="profile picture">'?></td>
    					
    				</tr>
    				<?php } ?>
    			</table>
    		</div>
    	</div>
    </div>
</body>
</html>