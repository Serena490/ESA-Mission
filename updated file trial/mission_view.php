<DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: monaco, monospace;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>HTML Table</h2>

<table>
  <tr>
    <th>Target ID</th>
    <th>Destination</th>
    <th>Type</th>
    <th>Crew Size</th>
    <th>Mission Name</th>
    <th>Launch Date</th>
  </tr>
  <tr>

<?php
$servername='localhost';
$username='admin';
$password='password';
$dbname = "ESA";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
    die('Could not Connect MySql Server:' .mysql_error());
}

$sql =  "SELECT * FROM Mission";
$result = mysqli_query($conn, $sql);
foreach ($result as $row) {
    echo "<tr><td>" .$row['target_id'].. $row['destination']."<td><td>" . $row['type']."<td><td>" . $row['crew_size']."<td><td>" . $row['mission_name']."<td><td>" . $row['launch_date']."</tr></td>";
}
?> 
