<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "Table_Homepage";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
$sql = "INSERT INTO Mission (name, destination, launch_date, type, crew_size, target_id)
VALUES ('".$_POST["name"]."','".$_POST["destination"]."','".$_POST["launch_date"]."'$_POST["type"]."'$_POST["crew_size"]."'$_POST["target_id"])";
if ($dbh->query($sql)) {
echo "<script type= 'text/javascript'>alert('New Record Inserted Successfully');</script>";
}
else{
echo "<script type= 'text/javascript'>alert('Data not successfully Inserted.');</script>";
}
$conn = null;
?>