<?php /*
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
     $target_id = $conn->insert_id;
    
     $sql =  "SET FOREIGN_KEY_CHECKS = 0;";
     $sql = "INSERT INTO Mission (name,destination,type,crew_size,launch_date,target_id)
     VALUES ('$name','$destination','$type','$crew_size','$launch_date','$target_id')";
     

     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?> */

    $servername='localhost';
    $username='admin';
    $password='password';
    $dbname = "test";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
include_once 'testingform.php';
if(isset($_POST['submit']))
{    
     $name = $_POST['name'];
  
    
     $sql =  "SET FOREIGN_KEY_CHECKS = 0;";
     $sql = "INSERT INTO table1 (name)
     VALUES ('$name')";
     

     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>