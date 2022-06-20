<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Rider Homepage</title>
	<link rel="stylesheet" type="text/css" href="rider_homepage.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/7571e7ef19.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Top Bar Showing rider name and profile picture -->
	<section id="topbar" class="d-flex align-items-center" style="height: 40px;">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
      </div>
  </div>
  </section>

	<!-- Nav Bar -->
	<nav class="navbar navbar-light " style="background-color: #22D037;">
  <div class="container">
    <a class="navbar-brand" href="rider_home.php">
      <i class="fa-solid fa-motorcycle"></i>
    </a>
  </div>
  <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
      </ul>
    </div>
</nav>


</body>
</html>