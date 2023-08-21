<?php
$id=0;
require 'connect.php';
if(isset($_POST['update'])){
$sql = "UPDATE employee SET name=:name, job_title=:job, department=:department where id=:id";
$statement = $pdo->prepare($sql);
$name = $_POST['name'];
$job = $_POST['job'];
$department = $_POST['department'];
$id=$_POST['id'];
$statement->bindParam(':name',$name, PDO::PARAM_STR);
$statement->bindParam(':job',$job, PDO::PARAM_STR);
$statement->bindParam(':department',$department, PDO::PARAM_STR);
$statement->bindParam(':id', $id, PDO::PARAM_INT);
$statement->execute();

}
echo "Employee with id $id is succesfullly updated <br>";
$sql="SELECT * FROM employee where id=$id";
$statement=$pdo->prepare($sql);
$statement->execute();
$data=$statement->fetchAll();
echo "<h2>";
foreach($data as $row){
    echo $row['name']. ' '. $row['job_title'] .' '. $row['department'];
    echo "<br>";
}
echo "</h2>";
$pdo=null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee Info </title>
</head>
<body>
<a href="viewAllEmployees.php"> view employees </a>
</body>
</html>