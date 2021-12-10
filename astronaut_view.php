<!--https://www.w3docs.com/snippets/html/how-to-create-an-html-button-that-acts-like-a-link.html -->
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

<h2>Astronaut Table</h2>

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