<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Target Form</title>
</head>
<body>
<form action="ESA_Info.php" method="post">
    <p>
        <label for="id">ID:</label>
        <input type="text" name="id" id="id">
    </p>
    <p>
        <label for="first_name">First name:</label>
        <input type="text" name="last_name" id="lastName">
    </p>
    <p>
        <label for="last_name">Last Name:</label>
        <input type="text" name="first_name" id="firstName">
    </p>
    <p>
        <label for="first_mission">First Mission:</label>
        <input type="text" name="first_mission" id="first_mission">
    </p>
    <p>
        <label for="no_missions">Number of Missions:</label>
        <input type="int" name="no_missions" id="no_missions">
    </p>
    <p>
        <label for="type">Type:</label>
        <input type="text" name="type" id="type">
    </p>
    <p>
        <label for="crew_size">Crew Size:</label>
        <input type="text" name="crew_size" id="crew_size">
    </p>
    <p>
        <label for="target_id">Target ID:</label>
        <input type="text" name="target_id" id="target_id">
    </p>
    <input type="submit" value="Submit">
</form>
</body>
</html>
