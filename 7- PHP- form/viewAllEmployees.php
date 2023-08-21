<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Employees</title>
    <style>
         th,td
          {border-bottom: 1px solid #ddd;}

         tr:hover
          {background-color: #D3D3D3;}
    </style>
</head>

<body>
<?php
require 'connect.php';
$sql="SELECT * FROM employee";
$statement=$pdo->prepare($sql);
$statement->execute();
echo "<table style='border:1px solid; width:80%; text-align:center; margin:auto;'>";
echo "<tr>";
echo "<th> Name </th>";
echo "<th> Job </th>";
echo "<th> Department </th>";
echo "<th> Edit </th>";
echo "<th> Delete </th>";
echo "</tr>";
$data=$statement->fetchAll();
    foreach ($data as $row) {
        echo "<tr>".
         "<td>" . $row['name']." </td>".
        " <td> ". $row['job_title'] . " </td>" 
        ."<td>" . $row['department'] . "</td>".
         "<td>" ." <a href=viewEmp.php?id=".$row['id']."> edit </a>
        </td>".
        "<td> <a href=deleteEmp.php?id=".$row['id']."> delete </a> </td>".
        "</tr>";
    }

echo "</table>";
$pdo=null;
?>
</br>
</br>
<a href="addEmp.php"> Add new Emp </a>
    
</body>
</html>