<!--<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Mission Form</title>
</head>
<body>
 
<form action="mission_infos.php" method="post">
    <p>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
    </p>
    <p>
        <label for="destination">Destination:</label>
        <input type="text" name="destination" id="destination">
    </p>
    <p>
        <label for="launch_date">Launch Date:</label>
        <input type="date" name="launch_date" id="launch_date">
    </p>
    <p>
        <label for="type">Type:</label>
        <input type="text" name="type" id="Type">
    </p>
    <p>
        <label for="crew_size">Crew Size:</label>
        <input type="number" name="crew_size" id="crew_size">
    </p>
    <p>
        <label for="target_id">Target ID:</label>
        <input type="number" name="target_id" id="target_id">
    </p>
    <input type="submit" value="submit">
  
</form>
</body>
</html> 
-->
<!DOCTYPE html>
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
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Contact Form</h2>
                    </div>
                    <p>Please fill this form and submit to add employee record to the database.</p>
                    <form action="mission_infos.php" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Destination</label>
                            <input type="text" name="destination" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Launch Date</label>
                            <input type="text" name="launch_date" class="form-control">
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
</html>