<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
</head>
<body>
<table>
<tr>
<th>Id</th>
<th>Username</th>
<th>Password</th>
</tr>
<?php
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
          
            
$sql = "SELECT $name, target_id FROM Mission";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["target_id"]. "</td><td>" . $row["name"] . "</td><td>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>