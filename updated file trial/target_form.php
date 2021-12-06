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
                    <form action="target_infos.php" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>First Mission</label>
                            <input type="text" name="destination" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>NO_MISSIONS</label>
                            <input type="text" name="no_missions" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Type=</label>
                            <input type="text" name="type" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Target_ID</label>
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