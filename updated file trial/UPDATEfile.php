<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
</head>
<body>
<table>
<tr>
<th>Id</th>
<th>Username</th>
<th>Password</th>
</tr>
<?php
    $servername='localhost';
    $username='admin';
    $password='password';
    $dbname = "test";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
        include_once 'testingform.php';
        if(isset($_POST['submit']))
        {    
             $name = $_POST['name'];
              
             $sql = "SELECT * FROM Mission                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           
              
             $query = mysqli_query($conn,$sql);
              
             if(!$query)
             {
                 echo "Query does not work.".mysqli_error($conn);die;
             }
              
             while($data = mysqli_fetch_array($query))
             {
                 echo "Id = ".$data['id']."<br>";
                 echo "Firstname = ".$data['firstname']."<br>";
                 echo "Lastname = ".$data['lastname']."<br>";
                 echo "Mobile = ".$data['mobile']."<br><hr>";
             }
             ?>
</table>
</body>
</html>