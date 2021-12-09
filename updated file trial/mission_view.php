<html>
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
            <?php 
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
</html>
