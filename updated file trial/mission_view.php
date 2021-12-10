<!--<html>
<head>
<title>Create Record</title>
</head>
    <body>
        <table>
            <tr>
                <th>Target ID</th>
                <th>Mission Name</th>
                <th>Destination</th>
                <th>Crew Size</th>
                <th>Type</th>
                <th>Launch Date</th>
            </tr>
             /* php
            $conn = mysqli_connect("localhost","admin","password","ESA");
        $sql = "SELECT target_id, mission_name, destination, crew_size, type, launch_date FROM Mission";
        $result = $conn-> query($sql);

        if ($result->num_rows > 0 {
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>". $row["target_id"] . "</td><td>". $row["mission_name"] . "</td><td>". $row["destination"] . "</td><td>". $row["crew_size"] . "</td><td>". $row["type"] . "</td><td>". $row["launch_date"] . "</td></tr>";
            }
            echo "</table>";
        }
        else {
            echo "No entries found please enter information";
        }
        mysqli_close($conn);
        ?>
        </table>
    </body>
</html> -->
<
<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
    <tr>
     <th>Target ID</th>
     <th>Mission Name</th>
     <th>Destination</th>
     <th>Crew Size</th>
     <th>Type</th>
     <th>Launch Date</th>
    </tr>
    <tr>
<th>Id</th>
<th>\Name</th>
</tr> -->
<?php
// $servername = "localhost";
// $username = "admin";
// $password = "password";

// try {
//   $conn = new PDO("mysql:host=$servername;dbname=ESA", $username, $password);
//   // set the PDO error mode to exception
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "Connected successfully";
// } catch(PDOException $e) {
//   echo "Connection failed: " . $e->getMessage();
// }


    //$conn = mysqli_connect("localhost","admin","password","ESA");
      //  $sql = "SELECT * FROM Mission";
       // $result = $conn-> query($sql);
      //  if ($result->num_rows > 0 {
         //   while ($row = $result->fetch_assoc()) {
             //   echo "<tr><td>". $row["target_id"] . "</td><td>". $row["mission_name"] . "</td><td>". $row["destination"] . "</td><td>". $row["crew_size"] . "</td><td>". $row["type"] . "</td><td>". $row["launch_date"] . "</td></tr>";
            }
      //  else {
       //     echo "No entries found please enter information";
    //    }
      //  mysqli_close($conn);
 
$servername='localhost';
$username='admin';
$password='password';
$dbname = "Table_Homepage";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
    die('Could not Connect MySql Server:' .mysql_error());
    }
$sql = "SELECT * FROM Astronaut";
$result = $conn->query($conn, $sql);
print_r($result);
// if ($result->num_rows > 0) {
// // output data of each row
// while($row = $result->fetch_assoc()) {
// echo "<tr><td>" . $row["ID"]. "</td><td>" . $row["Name"] . "</td></tr>";
// }
// echo "</table>";
// } else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>