<?php

$servername = "localhost";
$username = "admin";
$password = "password";

try {
  $conn = new PDO("mysql:host=$servername;dbname=Table_Homepage", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";
// use exec() because no results are returned
$conn->exec($sql);
$last_id = $conn->lastInsertId();
echo "New record created successfully. Last inserted ID is: " . $last_id;
} catch(PDOException $e) {
echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>


?>