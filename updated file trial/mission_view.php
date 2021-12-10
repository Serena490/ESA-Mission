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
$result = mysqli_fetch_assoc($result);
echo $result['Mission']


?> 
