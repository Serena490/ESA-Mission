<?php 
    $servername='localhost';
    $username='admin';
    $password='password';
    $dbname = "ESA";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
        
// This connects the php file to the phpmyadmin database by specifing the servername, username, password and database name
include_once 'mission_forms.php';
// This tells the code to link mission_forms.php to this php file
if(isset($_POST['submit']))
{    
     $name = $_POST['mission_name'];
     $destination = $_POST['destination'];
     $launch_date = $_POST['launch_date'];
     $crew_size = $_POST['crew_size'];
     $type = $_POST['type'];
     $target_id = $conn->insert_id;
// This tells the php file that each variable will equal the information which has been sent from the mission_forms.php file which is the user input inside the form
     $sql =  "SET FOREIGN_KEY_CHECKS = 0;";
     $sql = "INSERT INTO Mission (mission_name,destination,type,crew_size,launch_date,target_id)
     VALUES ('$name','$destination','$type','$crew_size','$launch_date','$target_id')";
// The $sql attribute allows the information which has been inputted to the user to be sent to the database and translatted from php to SQL so that phpMyAdmin understands what it is being told to do 
// When this is executed the information inputted by the user is saved under the variables and will be sent to the database and is inserted into the specified column names and table
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
// If the code is successfully executed then the user will receive a message saying it was successfull, if it isnt then the user will recieve an error message as well as a message explaining why the connection was unsuccessful.
?> 
