<?php
session_start();

if(isset($_SESSION['privilleged'])){
    unset($_SESSION['privilleged']);
    
}

header("location:login.php");
    die();
?>