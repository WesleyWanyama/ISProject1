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
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/7571e7ef19.js" crossorigin="anonymous"></script>
	<title>Rider Dashboard</title>
</head>
<body>

	<!-- Top Bar Showing rider info -->
	<section id="topbar" class="d-flex align-items-center" style="height: 50px;">
    <?php echo $fullname;?>
  </section>

    <!-- NAV BAR -->
    <nav class="navbar navbar-expand-md navbar-light bg-light">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"><i class="fa-solid fa-grid-horizontal"></i>Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"><i class="fa-solid fa-user-pen"></i>Make Application</a>
        </li>
        <li class="nav-item" >
          <a class="nav-link active" aria-current="page" href="#"><i class="fa-solid fa-rectangle-history"></i>View Applications</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <!-- Table showing registration details and giving an option to make an application -->
    <div class="card">
    	<div class="card-header">
    		<div class="row">
    			<div class="col">
    				<h3>Registration Details</h3>
    			</div>
    			<div class="col text-right">
    				<a href="" style="margin-left: 480px;"class="btn btn-success">Make Application</a>
    			</div>
    		</div>
    	</div>
    	<div class="card-body">
    		<div class="table-responsive">
    			<table class="table table-striped table-bordered">
    				<tr>
    					<th>Registration ID</th>
    					<th>Rider ID</th>
    					<th>Number Plate</th>
    					<th>Registration Date</th>
    					<th>KRA PIN</th>
    					<th>Make</th>
    					<th>Model</th>
    					<th>Weight</th>
    					<th>County</th>
    					<th>Registration Status</th>
    				</tr>

    				<!-- INSERT PHP CODE FOR DATA -->

    			</table>
    		</div>
    	</div>
    </div>

</body>

</html>