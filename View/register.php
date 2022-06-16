<?php?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	    <link rel="stylesheet" href="css/register.css">
	    <title>Sign Up</title>
	</head>
	<body>
		<h3>WEDKF</h3>
		<!--NAV BAR-->
		<div class="topnav" id="myTopnav">
	  <a href="#home" class="active">Home</a>
      <a href="#news">About Us</a>
      <a href="#contact">Contact</a>
      <a href="#about">FAQs</a>
	  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
       </a>
     </div>
		
		<div class="registration_form">
		<span class="badge bg-warning text-dark">Create Account</span><br><br>
		<form action="process.php" method="POST" enctype="multipart/form-data">

		<label for="firstname">Enter your First name</label><br/>
		<input type="text" name="first_name" required minlength="3" maxlength="30" /><br/><br/>

		<label for="lastname">Enter your Last name</label><br/>
		<input type="text" name="last_name" required  /><br/><br/>

		<label for="othername">Enter your National ID Number</label><br/>
		<input type="number" name="national_id_number" min="8" max="8" required/><br/><br/>

		<label for="userpassword">Enter your Password</label><br/>
		<input type="password" name="password" required/><br/><br/>

		<label for="profilepicture">Upload Profile Picture</label><br/>

        <!-- PROFILE PICTURE UPLOAD -->
        <div class="form-group text-center">
            <span class="img-div">
              <div class="text-center img-placeholder"  onClick="triggerClick()">
                <h4>Upload Photo</h4>
              </div>
              <img src="images/test_avator.jpg" onClick="triggerClick()" id="profileDisplay">
            </span>
            <input type="file" name="profile_picture" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;">
          </div>
        
        <input type="submit" value="Sign Up" class="btn btn-success" />

		</form>
	</div>
	
	
	</body>
</html>
<script src="javascript/register.js"></script>
