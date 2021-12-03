<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Mission Form</title>
</head>
<body>
 
<form action="mission_info.php" method="post">
    <p>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
    </p>
    <p>
        <label for="destination">Destination:</label>
        <input type="text" name="destination" id="destination">
    </p>
    <p>
        <label for="launch_date">Launch Date:</label>
        <input type="date" name="launch_date" id="launch_date">
    </p>
    <p>
        <label for="type">Type:</label>
        <input type="text" name="type" id="Type">
    </p>
    <p>
        <label for="crew_size">Crew Size:</label>
        <input type="nuumber" name="crew_size" id="crew_size">
    </p>
    <p>
        <label for="target_id">Target ID:</label>
        <input type="number" name="target_id" id="target_id">
    </p>
    <input type="submit" value="submit">
  
</form>
</body>
</html>
