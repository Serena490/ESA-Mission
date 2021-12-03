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
?>

   // Taking all 5 values from the form data(input)
   $target_id =  $_REQUEST['target_id'];
   $destination = $_REQUEST['destination'];
   $type =  $_REQUEST['type'];
   $crew_size = $_REQUEST['crew_size'];
   $name = $_REQUEST['name'];
   $launch_date = $_REQUEST['launch_date'];
   
     
   // Performing insert query execution
   // here our table name is college
   $sql = "INSERT INTO Mission  VALUES ('$target_id', 
       '$destination','$type','$crew_size','$name','$launch_date)";
     
   if(mysqli_query($conn, $sql)){
       echo "<h3>data stored in a database successfully." 
           . " Please browse your localhost php my admin" 
           . " to view the updated data</h3>"; 

       echo nl2br("\n$target_id\n $destination\n "
           . "$type\n $crew_size\n $name \n $launch__date");
   } else{
       echo "ERROR: Hush! Sorry $sql. " 
           . mysqli_error($conn);
   }
     
   // Close connection
?>