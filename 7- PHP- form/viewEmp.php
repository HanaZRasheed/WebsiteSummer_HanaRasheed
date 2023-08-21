<?php
require 'connect.php';
$name='';
$job='';
$department='';
$id=0;

$sql="SELECT * FROM employee where id=:id";
$statement=$pdo->prepare($sql);
$id=$_GET['id'];
$statement->bindParam(":id",$id, PDO::PARAM_INT);
$statement->execute();

$data=$statement->fetchAll();
echo "<h2>";
foreach($data as $row){
    $name=$row['name'];
    $job=$row['job_title'];
    $department=$row['department'];
    
    echo 'Employee name '. $row['name']. '</br> Job '. $row['job_title'] .'</br> Department '. $row['department'];
}
echo "</h2>";

if(isset($_POST['update'])){
$sql = "UPDATE employee SET  name= :name job_title=:job departement=:department where id = :id";
$statement = $pdo->prepare($sql);
$name = $_POST['name'];
$job = $_POST['job'];
$department = $_POST['department'];
$statement->bindParam(':name', $name, PDO::PARAM_STR);
$statement->bindParam(':job', $job, PDO::PARAM_STR);
$statement->bindParam(':department', $department, PDO::PARAM_STR);
$statement->execute();
$pdo=null;

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view Employee</title>
</head>
<body>
<form method="post" action="editEmp.php">
        <label> Employee Name</label>
        <input type="text" name="name" value="<?php echo $name?> " required>

        <label> Job Title</label>
        <input type="text" name="job" value="<?php echo $job?>" required>

        <label> Department</label>
        <input type="text" name="department" value="<?php echo $department?>" required>
        <input type="hidden" name="id" value="<?php echo $id?>" required>

        <input type="submit" name="update" value="Edit">
    </form>
    <a href="viewAllEmployees.php"> view employees </a>
</body>
</body>
</html>