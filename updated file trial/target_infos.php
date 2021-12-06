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
     $first_mission = $_POST['destination'];
     $no_mission = $_POST['launch_date'];
     $type = $_POST['type'];
     $target_id = $conn->insert_id;
     
     $sql = "INSERT INTO Targets (name,first_mission,type,no_missions,target_id)
     VALUES ('$name','$first_mission','$type','$no_missions',)";
     
     
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>