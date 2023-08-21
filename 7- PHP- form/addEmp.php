<?php
require 'connect.php';
if(isset($_POST['insert'])){

$sql="INSERT INTO employee(name,job_title,department) values (:username,:job,:department)";
$statement=$pdo->prepare($sql);
$username=$_POST['username'];
$job_title=$_POST['job'];
$department=$_POST['department'];
$statement->bindParam(":username",$username,PDO::PARAM_STR);
$statement->bindParam(":job",$job_title,PDO::PARAM_STR);
$statement->bindParam(":department",$department,PDO::PARAM_STR);
$statement->execute();
$pdo=null;

echo "New Employee is added successfully";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new Employee</title>
</head>
<body>
<form method="post" >
        <label> Employee Name</label>
        <input type="text" name="username" required>

        <label> Job Title</label>
        <input type="text" name="job" required>

        <label> Department</label>
        <input type="text" name="department" required>

        <input type="submit" name="insert">
    </form>

    <a href="viewAllEmployees.php"> view employees </a>
    
</body>
</html>