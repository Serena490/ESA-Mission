<?php

$servername = "localhost";
$username = "admin";
$password = "password";

$sql = "INSERT INTO mission (name, destination, launch_date, type, crew_size, target_id)
VALUES ('".$_POST["name"]."','".$_POST["destination"]."','".$_POST["launch_date"]."'$_POST["type"]."'$_POST["crew_size"]."'$_POST["target_id"])";
if ($dbh->query($sql)) {
echo "<script type= 'text/javascript'>alert('New Record Inserted Successfully');</script>";
}
else{
echo "<script type= 'text/javascript'>alert('Data not successfully Inserted.');</script>";
}

$dbh = null;
}
catch(PDOException $e)
{
echo $e->getMessage();
}

}


<
