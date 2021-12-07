<!DOCTYPE html>
<html>
<head>
<title>Load Data</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #e748e43;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>ID</th>
<th></th>
</tr>
<?php
$servername='localhost';
$username='admin';
$password='password';
$dbname = "Table_Homepage";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
  if(!$conn){
      die('Could not Connect MySql Server:' .mysql_error());
    }
$sql = "SELECT target_id FROM Mission";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["target_id"]. "</td><td>" ."</td><td>"
"</td></tr>";
}
echo "</table>";
} else { echo "No results"; }
$conn->close();
?>
</table>
</body>
</html>
