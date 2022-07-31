<?php
session_start();
//If the session is not started, redirect to the login page
if(!isset($_SESSION['user_details']))
{
  header('Location:rider_login.php');
}
  $ID = $_SESSION['user_details']['rider_ID'];
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
	<title>Boda Details</title>
</head>
<body>
  <!-- Top Bar Showing rider info -->
  <section id="topbar" class="d-flex align-items-center" style="height: 60px; background-color: #0C7018;">
    <?php echo '<h4 style="margin-left: 20px; color: white;">'. $fullname.'</h4>';?>
    <?php echo '<img style="margin-left: 1000px; border-radius:50%;" src="images/'.$_SESSION['user_details']['profile_picture'].'" width="55px;" height="55px;" alt="profile picture">'?>
  </section>

    <!-- NAV BAR -->
    <nav class="navbar navbar-expand-md navbar-light bg-light">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="rider_dashboard.php"><i class="fa-solid fa-grid-horizontal"></i>Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="boda_details.php"><i class="fa-solid fa-user-pen"></i>Make Application</a>
        </li>
        <li class="nav-item" >
          <a class="nav-link active" aria-current="page" href="boda_registration_history.php"><i class="fa-solid fa-rectangle-history"></i>View Application History</a>
        </li>
      </ul>
    </div>
    <a href="rider_logout.php"><button type="button" class="btn btn-secondary">Logout</button></a>
  </div>
</nav>

	<form style="margin-top: 5px; margin-left: 380px; "class="row g-3" method="POST" action="insert_boda_details.php" enctype="multipart/form-data">
    <!-- CODE TO SELECT THE RIDER ID FROM THE TABLE RIDER IN THE DATABASE -->
    <?php
    $servername = '127.0.0.1';
    $serveruser = 'root';
    $serverpassword = '';
    $database = 'is_project1';
    //connection
    $conn = new mysqli($servername,$serveruser,$serverpassword,$database);
    if($conn->connect_error){
      die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM rider WHERE rider_ID=$ID";
    $result = $conn->query($sql);
    if($result->num_rows>0){
      ?>
      <div class="col-7">
        <label for="numberplate" class="form-label">Rider ID</label>
      <select class="form-select" aria-label="Default select example" name="rider_ID" required>
        <!-- <option selected>Rider ID</option> -->
        <?php
      while($row = $result->fetch_assoc()){
        ?>
        <!-- <option value="<?php echo $row["rider_ID"];?>"><?php echo $row["first_name"]." ".$row["last_name"]; ?></option> -->
        <option value="<?php echo $row["rider_ID"];?>"><?php echo $row["rider_ID"];?></option>
        <?php
      }
      ?>
      </select>
    </div>
      <?php
    }else{
      echo "No Data Available";
    }
    ?>
  <div class="col-7">
    <label for="numberplate" class="form-label">Motorcycle Number Plate</label>
    <input type="text" name="number_plate" class="form-control" id="inputEmail4">
  </div>
  <div class="col-7">
    <label for="nationalid" class="form-label">Enter National ID Number</label>
    <input type="number" name="national_ID_number" pattern="[1-9][0-9]{0,8}" class="form-control" id="inputAddress" >
  </div>
  <div class="col-7">
    <label for="krapin" class="form-label">Enter KRA PIN</label>
    <input type="text" name="KRA_pin" pattern="[A-Za-z0-9]{1,11}" class="form-control" id="inputAddress" >
  </div>
  <div class="col-7">
    <label for="inputAddress2" class="form-label">Upload Certificate of Good Conduct</label><br>
    <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
    <input type="file" name="certificate_of_good_conduct" id="certificate_of_good_conduct">
  </div>
  <div class="col-7">
    <select class="form-select"  aria-label="Default select example" name="county">
    	<option selected>Select County of Residence</option>
    	  <option  value="Mombasa">01.Mombasa</option>
          <option  value="Kwale">02.Kwale</option>
          <option  value="Kilifi">03.Kilifi</option>
          <option  value="Tana River">04.Tana River</option>
          <option  value="Lamu">05.Lamu</option>
          <option  value="TaitaTaveta">06.Taita Taveta</option>
          <option  value="Garissa">07.Garissa</option>
          <option  value="Wajir">08.Wajir</option>
          <option  value="Mandera">09.Mandera</option>
          <option  value="Marsabit">10.Marsabit</option>
          <option  value="Isiolo">11.Isiolo</option> 
          <option  value="Meru">12.Meru</option>
          <option  value="Tharaka">13.Tharaka</option>
          <option  value="Embu">14.Embu</option>
          <option  value="Kitui">15.Kitui</option>
          <option  value="Machakos">16.Machakos</option>
          <option  value="Makueni">17.Makueni</option>
          <option  value="Nyandarua">18.Nyandarua</option> 
          <option  value="Nyeri">19.Nyeri</option>
          <option  value="Kirinyaga">20.Kirinyaga</option>
          <option  value="Muranga">21.Muran'ga</option>
          <option  value="Kiambu">22.Kiambu</option>
          <option  value="Turkana">23.Turkana</option>
          <option  value="WestPokot">24.West-pokot</option>
          <option  value="Samburu">25.Samburu</option>
          <option  value="TransNzoia">26.Trans-Nzoia</option>
          <option  value="UasinGishu">27.Uasin Gishu</option>
          <option  value="ElgeyoMarakwet">28.Elgeyo Marakwet</option>
          <option  value="Nandi">29.Nandi County</option>
          <option  value="Baringo">30.Baringo</option>
          <option  value="Laikipia">31.Laikipia</option>
          <option  value="Nakuru">32.Nakuru</option>
          <option  value="Narok">33.Narok</option>
          <option  value="Kajiado">34.Kajiado</option>
          <option  value="Kericho">35.Kericho</option>
          <option  value="Bomet">36.Bomet</option>
          <option  value="Kakamega">37.Kakamega</option>
          <option  value="Vihiga">38.Vihiga</option>
          <option  value="Bungoma">39.Bungoma</option>
          <option  value="Busia">40.Busia</option>
          <option  value="Siaya">41.Siaya</option>
          <option  value="Kisumu">42.Kisumu</option>
          <option  value="Homabay">43.Homabay</option>
          <option  value="Migori">44.Migori</option>
          <option  value="Kisii">45.Kisii</option>
          <option  value="Nyamira">46.Nyamira</option>
          <option  value="Nairobi">47.Nairobi</option>

    </select>
  </div>
  <h5>Enter Motorcycle specifications</h5><br>
  <div class="col-md-3">
    <label for="make" class="form-label">Make</label>
    <input type="text" name="make" class="form-control" id="make">
  </div>
  <div class="col-md-3">
    <label for="inputState" class="form-label">Model</label>
    <input type="text" name="model" class="form-control" id="model">
  </div>
  <div class="col-md-3">
    <label for="inputZip" class="form-label">Weight(Kg)</label>
    <input type="text" name="weight" class="form-control" id="weight">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Submit Details</button>
  </div>
</form>

</body>
</html>