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

if(isset($_POST["submit"])){
$servername='localhost';
$username='admin';
$password='password';

try {
$dbh = new PDO("mysql:host=$servername;dbname=Table_Homepage",$username,$password);

$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
$sql = "INSERT INTO mission (name, destination, launch_date, type, crew_size, target_id)
VALUES ('".$_POST["name"]."','".$_POST["destination"]."','".$_POST["launch_date"]."'$_POST["type"]."'$_POST["crew_size"]."'$_POST["target_id"])";
if ($dbh->query($sql)) {
echo "<script type= 'text/javascript'>alert('New Record Inserted Successfully');</script>";
}
else{
echo "<script type= 'text/javascript'>alert('Data not successfully Inserted.');</script>";
}

$dbh = null;
}
catch(PDOException $e)
{
echo $e->getMessage();
}

}
?>
</body>
</html>                                      