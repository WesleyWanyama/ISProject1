<?php require_once('database.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Register</title>
</head>
<body>
  <div class="container">
  <div class="row justify-content-center">
  <div class="col-md-5">
   <div class="card">
     <h2 class="card-title text-center">Create an account</h2>
      <div class="card-body py-md-4">
       <form _lpchecked="1" action="insert_rider.php"  method="POST" enctype="multipart/form-data">
          <div class="form-group">
             <input type="text" class="form-control" name="first_name" placeholder="First Name" required minlength="3" maxlength="30">
        </div>
        <div class="form-group">
             <input type="text" class="form-control" name="last_name" placeholder="Last Name" required minlength="3" maxlength="30">
        </div>
        <div class="form-group">
             <input type="number" class="form-control" name="national_id_number" placeholder="National ID" pattern="[1-9][0-9]{0,8}"  required >
        </div>
                            
                          
   <div class="form-group">
     <input type="password" class="form-control" name="password" placeholder="Password">
   </div>
   <div class="form-group">
    <label for="profilepicture">Upload Profile Picture</label><br/>
      <input type="file" class="form-control" name="profile_picture" >
   </div>
   <div class="d-flex flex-row align-items-center justify-content-between">
      <a href="rider_login.php">Already have an account?</a>
                              <button class="btn btn-success">Sign Up</button>
          </div>
       </form>
     </div>
  </div>
</div>
</div>
</div>

</body>
<style>
  @import url('https://fonts.googleapis.com/css?family=PT+Sans');

body{
  background: #fff;
  font-family: 'PT Sans', sans-serif;
}
h2{
  padding-top: 1.5rem;
}
a{
  color: #333;
}
a:hover{
  color: #da5767;
  text-decoration: none;
}
.card{
  border: 0.40rem solid #f8f9fa;
  top: 10%;
}
.form-control{
  background-color: #f8f9fa;
  padding: 20px;
  padding: 25px 15px;
  margin-bottom: 1.3rem;
}

.form-control:focus {

    color: #000000;
    background-color: #ffffff;
    border: 3px solid #da5767;
    outline: 0;
    box-shadow: none;

}

.btn{
  padding: 0.6rem 1.2rem;
  background: #da5767;
  border: 2px solid #da5767;
}
.btn-primary:hover {

    
    background-color: #df8c96;
    border-color: #df8c96;
  transition: .3s;

}
</style>
</html>