<!DOCTYPE html>
<html> 
<head>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <title>Registration </title>
    <style>
        .hed{
            background: #0C7018;
            color: white;
        }
        .hed h1{
            padding-top: 20px;
            padding-bottom: 25px;
        }
        .form{
            margin-top: 50px;
            background: #0C7018;
        }
        .table{
            margin-top: 0px;
        }
    </style>
</head>
<body class="stretched">
    <div class="col-md-12 hed">
        <center>
        <h1>Boda Details</h1>
        </center>
    </div>
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">
                <div class="row">
                    <div class="col-md-12 p-0">
                        <table class="table table-dark">
                            <?php

                            require_once('procedural_db_connection.php');
                            $sql = "SELECT * FROM registration_details WHERE registration_ID = " . $_GET["registration_id"];
                            $result = mysqli_query($conn,$sql);
                            $row = mysqli_fetch_assoc($result);


                            ?>
                          <tbody>
                                <tr>
                                    <th>Registration ID</th>
                                    <td><?php echo $row['registration_ID']; ?></td>
                                </tr>  
                                <tr>
                                    <th>Rider ID</th>
                                    <td><?php echo $row['rider_ID']; ?></td>
                                </tr>
                                <tr>
                                    <th>National ID Number</th>  
                                    <td><?php echo $row['national_ID_number']; ?></td>
                                </tr>
                                <tr>
                                    <th>Number Plate</th>  
                                    <td><?php echo $row['number_plate']; ?></td>
                                </tr> 
                                <tr>
                                    <th>Registration Date</th>
                                    <td><?php echo $row['registration_date']; ?></td>
                                </tr> 
                                <tr> 
                                    <th>KRA PIN</th>
                                    <td><?php echo $row['KRA_pin']; ?></td>
                                </tr>
                                <tr>
                                    <th>County</th>  
                                    <td><?php echo $row['county']; ?></td>
                                </tr>
                                <tr>  
                                    <th>Make</th>
                                    <td><?php echo $row['make']; ?></td>
                                </tr>
                                <tr>
                                    <th>Model</th>  
                                    <td><?php echo $row['model']; ?></td>
                                </tr>
                                <tr>
                                    <th>Weight</th>  
                                    <td><?php echo $row['weight']; ?></td>
                                </tr>
                                <tr>
                                    <th>Registration Status</th>  
                                    <td><?php echo $row['registration_status']; ?></td>
                                </tr>
                                <tr>  
                                    <th>Back To Dashboard</th>
                                    <td><a href="view_boda_details.php" type="button" class="btn btn-primary">Back</a></td>
                                </tr>
                          </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>