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
<!-- This will load the html and will put bootstrap as the css and -->
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Contact Form</h2>
                    </div>
                    <p>Please enter Target ID, if unknown go back to homepage and press view information to find out.</p>
                    <form action="info_amend.php" method="post">
                        <!--aaaaaa-->
                        <div class="form-group">
                            <label>Target ID</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </form>
                    </div>
            </div>        
        </div>
    </div>
</body>
</html>