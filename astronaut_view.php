<?php
$servername='localhost';
$username='admin';
$password='password';
$dbname = "ESA";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
    die('Could not Connect MySql Server:' .mysql_error());
}

$sql =  "SELECT * FROM Astronaut";
$result = mysqli_query($conn, $sql);
foreach ($result as $row) {
    echo "<tr><td>" .$row['astronaut_id']."<td><td>". $row['astronaut_name']."<td><td>" . $row['no_missions']."</tr></td>";
}
?> 