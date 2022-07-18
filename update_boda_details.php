<?php

require_once('procedural_db_connection.php');
if(count($_POST)>0){
  $sql = "UPDATE registration_details SET KRA_pin='" .$_POST['KRA_pin']."' , county='" .$_POST['county']. "',make='" .$_POST['make']. "',model='" .$_POST['model']. "',weight='" .$_POST['weight']. "' WHERE registration_ID = '" .$_GET['registration_ID']. "'";
  if(mysqli_query($conn,$sql)){
    $message = "Record Modified Successfully";
  }else{
    echo "Error updating record";
  }
}

?>

<!DOCTYPE html>
<html>  
<head> 
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Update Boda Details</title>
</head>
<body>

	<form style="margin-top: 10px;"class="row g-3" method="POST" enctype="multipart/form-data">
    <div><?php if(isset($message)) { echo $message; } ?>
</div>
  <div class="col-7">
    <label for="krapin" class="form-label">Enter KRA PIN</label>
    <input type="text" name="KRA_pin" class="form-control" id="inputAddress" >
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
    <label for="inputZip" class="form-label">Weight</label>
    <input type="text" name="weight" class="form-control" id="weight">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Submit Details</button>
  </div>
</form>

</body>
</html>