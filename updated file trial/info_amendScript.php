<?php
    $servername='localhost';
    $username='admin';
    $password='password';
    $dbname = "ESA";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }

        $target_id = $_POST["target_id"];
        $destination = $_POST["destination"];
        $type = $_POST["type"];
        $crew_size = $_POST["crew_size"];
        $mission_name = $_POST["mission_name"];
        $launch_date = $_POST["launch_date"];

        $sql = "UPDATE Mission set mission_name='$mission_name', destination='$destination', type='$type', crew_size='$crew_size',launch_date='launch_date' WHERE target_id='$target_id'";

        if ($conn->query($sql)===TRUE) {
            echo "Information successfully updated:".$target_id."-".$destination."-".$crew_size."-".$mission_name."-".$launch_date."-".$type;
        }
        else{
            echo "Error input was unsuccessful:".$sql."<br>".$conn->error;
        }

        $conn->close();
        ?>