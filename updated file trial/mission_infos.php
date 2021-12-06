<?php
    $servername='localhost';
    $username='admin';
    $password='password';
    $dbname = "Table_Homepage";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
include_once 'mission_forms.php';
if(isset($_POST['submit']))
{    
     $name = $_POST['name'];
     $destination = $_POST['destination'];
     $launch_date = $_POST['launch_date'];
     $crew_size = $_POST['crew_size'];
     $type = $_POST['type'];
     $target_id = $_POST['target_id'];
     
     $sql = "INSERT INTO Mission (name,destination,type,target_id,crew_size,launch_date)
     VALUES ('$name','$destination','$type','$target_id','$crew_size','$launch_date')";
     
     
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>