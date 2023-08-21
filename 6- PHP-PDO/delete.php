<?php
require 'connect.php';
$sql="DELETE FROM employee WHERE job_title=:job";

$statement=$pdo->prepare($sql);
$new_title="Team Lead";

echo "Job title is $new_title <br/>";
echo 'Job title is $new_title <br/>';
$statement->bindParam(":job",$new_title, PDO::PARAM_STR);
$statement->execute();
$pdo=null;
?>

