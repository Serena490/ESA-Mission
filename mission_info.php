<?php
try{
    $sql = "INSERT INTO mission (target_id, destination, type, crew_size, name, launch_date) VALUES ('','', '','','','')";    
    $pdo->exec($sql);
    echo "Records inserted successfully.";
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
 
// Close connection
unset($pdo);
?>