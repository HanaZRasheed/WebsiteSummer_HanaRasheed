<?php
session_start();
if(isset($_SESSION['name']) and isset($_SESSION['id'])){
    unset($_SESSION['name']);
    unset($_SESSION['id']);
}
print_r($_SESSION);

session_destroy();
?>