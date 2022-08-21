<?php
require 'connect.php';
$sql="SELECT * FROM employee WHERE job_title=:job";

$statement=$pdo->prepare($sql);
$new_title="Team Lead";
$statement->bindParam(":job",$new_title, PDO::PARAM_STR);
$statement->execute();

$data=$statement->fetchAll();
foreach($data as $row){
    echo $row['name']. ' '. $row['job_title'] .' '. $row['department'] . '</br>';
}
$pdo=null;

?>


