<?php 
    $servername='localhost';
    $username='admin';
    $password='password';
    $dbname = "ESA";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }

       
        $target_id=$_POST["target_id"]
        $sql = "SELECT * FROM Mission WHERE target_id='$target_id'";
        
    $result = $conn->query($sql);

    if ($result->num_rows > 0){
    $row = result->fetch_assoc();

    $target_id = $row["target_id"];
    $destination = $row["destination"];
    $type = $row["type"];
    $crew_size = $row["crew_size"];
    $mission_name = $row["mission_name"];
    $launch_date = $row["launch_date"];

    echo 
    "<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<!-- This will load the html and will put bootstrap as the css and -->
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Contact Form</h2>
                    </div>
                    <p>Please fill this form and submit to add employee record to the database.</p>
                    <form action="info_amendScript.php" method="post">
                        <!--aaaaaa-->
                        <div class="form-group">
                        <label>Target ID</label>
                        <input type="hidden" name="target_id" class="form-control">
                    </div>
                        <div class="form-group">
                            <label>Mission Name</label>
                            <input type="text" name="mission_name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Destination</label>
                            <input type="text" name="destination" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Launch Date</label>
                            <input type="date" name="launch_date" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Type</label>
                            <input type="text" name="type" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Crew Size</label>
                            <input type="number" name="crew_size" class="form-control">
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>"
<!--This uses each  -->
