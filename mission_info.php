<html>
<head>
<title>insert data in database using PDO(php data object)</title>

</head>
<body>

<div id="main">
<h1>Insert data into database using PDO</h1>
<div id="login">
<h2>Student's Form</h2>
<hr/>
<form action="" method="post">
<label>Student Name :</label>
<input type="text" name="stu_name" id="name" required="required" placeholder="Please Enter Name"/><br /><br />
<label>Student Email :</label>
<input type="email" name="stu_email" id="email" required="required" placeholder="john123@gmail.com"/><br/><br />
<label>Student City :</label>
<input type="text" name="stu_city" id="city" required="required" placeholder="Please Enter Your City"/><br/><br />
<input type="submit" value=" Submit " name="submit"/><br />
</form>
</div>

<?php
if(isset($_POST["submit"])){
$hostname='localhost';
$username='admin';
$password='password';

try {
$dbh = new PDO("mysql:host=$hostname;dbname=Table_Homepage",$username,$password);

$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
$sql = "INSERT INTO mission (student_name, student_email, student_city)
VALUES ('".$_POST["stu_name"]."','".$_POST["stu_email"]."','".$_POST["stu_city"]."')";
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
?>
</body>
</html>