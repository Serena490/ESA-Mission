<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "Table_Homepage";








try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
  die("ERROR: Could not connect. " . $e->getMessage());
}








/*
try{
$sql = "INSERT INTO Mission (name, destination, launch_date, type, crew_size, target_id)
VALUES ('"<div class="$_REQUEST"></div>["name"]."','".$_REQUEST["destination"]."','".$_REQUEST["launch_date"]."'$_REQUEST["type"]."','"$_REQUEST["crew_size"]."'.'$_REQUEST["target_id"])";

$conn->exec($sql);
    echo "Records inserted successfully.";
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
 
// Close connection
unset($conn);
?>