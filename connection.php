<!DOCTYPE html>
<html lang="en">
<head>
  <title>Connection Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php
/*
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
?>
<div class="d-grid">
    <button type="button" class="btn btn-primary btn-block"onclick="window.location.href='homepage.php'">Continue to Homepage</button>
  </div>

