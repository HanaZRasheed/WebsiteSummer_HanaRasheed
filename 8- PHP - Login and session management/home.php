<?php
session_start();
if(!isset($_SESSION['privilleged'])){
   header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <div> <p>  logged in succesfully 
    <?php //echo $_SESSION['privilleged'] ?> <p> </div> 
    <a href="logout.php"> Log out here </a>
</body>
</html>