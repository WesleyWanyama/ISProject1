<?php require_once('C:\xamp\htdocs\ISProject1\Controller\rider_session.php'); ?>
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
	<section id="topbar" class="d-flex align-items-center" style="height: 40px;">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
      </div>
  </div>
  </section>

    <!-- NAV BAR -->
    <nav>
    	<a href="#"><i class="fa-solid fa-grid-horizontal"></i>Dashboard</a>
    	<a href="#"><i class="fa-solid fa-user-pen"></i>Make Application</a>
    	<a href="#"><i class="fa-solid fa-rectangle-history"></i>View Applications</a>
    </nav>

    <!-- Section showing rider info and giving log out option -->
    <section>
    	<div>
    		
    	</div>
    </section>

    <!-- Table showing registration details and giving an option to make an application -->
    <div class="card">
    	<div class="card-header">
    		<div class="row">
    			<div class="col">
    				Registration Details
    			</div>
    			<div class="col text-right">
    				<a href="" class="btn btn-success">Make Application</a>
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