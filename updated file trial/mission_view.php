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
$dbname = "Table_Homepage";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
    die('Could not Connect MySql Server:' .mysql_error());
}

$sql =  "SELECT * FROM Mission";
$result = mysqli_query($conn, $sql);
foreach ($result as $row) {
    echo $row['target_id']. $row['destination'] . $row['type'] . $row['crew_size'] . $row['mission_name'] . $row['launch_date'];
}
?> 
