<?php 
$servername='localhost';
$username='admin';
$password='password';
$dbname = "Table_Homepage";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
    die('Could not Connect MySql Server:' .mysql_error());
}

$sql =  "SELECT * FROM Mission";
$result = mysqli_query($conn, $sql);
foreach ($result as $row) {
    echo $row['target_id']."" $row['destination'] . $row['type'] . $row['crew_size'] . $row['mission_name'] . $row['launch_date'];
}
?> 
