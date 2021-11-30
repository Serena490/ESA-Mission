<!DOCTYPE html>
<html lang="en">
<head>
  <title>Connection Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<center>
<?php


$servername = "localhost";
$username = "admin";
$password = "password";

try {
  $conn = new PDO("mysql:host=$servername;dbname=Table_Homepage", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}


        $name = $_REQUEST['name'];
        $destination = $_REQUEST['destination'];
        $launch_date =  $_REQUEST['launch_date'];
        $type = $_REQUEST['type'];
        $crew_size = $_REQUEST['crew_size'];
        $target_id = $_REQUEST['target_id'];
        
        $sql = "INSERT INTO Table_Homepage VALUES ('$name',
			'$destination','$launch_date','$type','$crew_size','$target_id')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n $name\n $destination \n "
				. "$launch_date\n $type\n $crew_size \n $target_id");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
