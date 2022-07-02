<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Rider Login</title>
</head>
<body>
	<section class="vh-100" style="background-color: #0C7018;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="bodalogin.jpg"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem; height:100%" />
            </div>

            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="process_rider_login.php" method="POST" enctype="multipart/form-data">

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">Welcome</span>
                  </div>
                  <?php
                  
                  if(isset($_SESSION['status']) && $_SESSION['status'] !='')
                  {
                    echo '<h2 class = "bg-danger text-white">'.$_SESSION['status'].'</h2>';
                    unset($_SESSION['status']);
                  }

                  ?>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                  <div class="form-outline mb-4">
                  	<input type="number" name="national_id_number" pattern="[1-9][0-9]{0,8}" class="form-control form-control-lg" /> 
                    <label class="form-label" for="nationalid">National ID Number</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" name= "password" id="password" class="form-control form-control-lg" />
                    <label class="form-label" for="passwordinput">Password</label>
                  </div>

                  <div class="pt-1 mb-4">
                    <input type="submit" value="Log in" name="login" class="btn btn-success" />
                  </div>

                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="register.php"
                      style="color: #393f81;">Register here</a></p>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> 

</body>
</html>