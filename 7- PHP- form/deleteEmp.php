<?php
require 'connect.php';
$sql="DELETE FROM employee WHERE id=:id";
$id=$_GET['id'];
$statement=$pdo->prepare($sql);
$statement->bindParam(":id",$id, PDO::PARAM_INT);
$statement->execute();
$pdo=null;

echo "employee with id $id is deleted </br> ";


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Delete Emp </title>
</head>
<body>
<a href="viewAllEmployees.php"> view employees </a>
</body>
</html>