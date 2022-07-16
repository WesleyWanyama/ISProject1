<?php
session_start();
//If the session is not started, redirect to the login page
if(!isset($_SESSION['admin_details']))
{
  header('Location:admin_login.php');
}
  $username = $_SESSION['admin_details']['username'];
require_once('database.php');
$result = $database->viewBodaDetails();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Submitted Boda Details</title>
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
          <a class="nav-link active" aria-current="page" href="view_boda_details.php"><i class="fa-solid fa-rectangle-history"></i>Submitted Boda Details</a>
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
    				<h3>Boda Details</h3>
    			</div>
    		</div>
    	</div>
    	<div class="card-body">
    		<div class="table-responsive">
    			<table class="table table-striped table-bordered">
    				<tr>
    					<th>Registration ID</th>
    					<th>Rider ID</th>
    					<th>National ID Number</th>
    					<th>Number Plate</th>
    					<th>Registration Date</th>
              <th>KRA PIN</th>
              <th>Certificate of Good Conduct</th>
              <th>County</th>
              <th>Make</th>
              <th>Model</th>
              <th>Weight</th>
              <th>Registration Status</th>
    				</tr>
    				<?php
    				while($row = mysqli_fetch_assoc($result)){
    				?>
    				<tr>
    					<td><?php echo $row["registration_ID"]; ?></td>
    					<td><?php echo $row["rider_ID"]; ?></td>
    					<td><?php echo $row["national_ID_number"]; ?></td>
    					<td><?php echo $row["number_plate"]; ?></td>
    					<td><?php echo $row["registration_date"]; ?></td>
              <td><?php echo $row["KRA_pin"]; ?></td>
              <td><a href="download.php?registration_id=<?php echo $row["registration_ID"]; ?>"><button type="button" class="btn btn-info">Download</button></a></td>
              <td><?php echo $row["county"]; ?></td>
              <td><?php echo $row["make"]; ?></td>
              <td><?php echo $row["model"]; ?></td>
              <td><?php echo $row["weight"]; ?></td>
              <td><?php echo $row["registration_status"]; ?></td>	
    				</tr>
    				<?php } ?> 
    			</table>
    		</div>
    	</div>
    </div>
</body>
</html>