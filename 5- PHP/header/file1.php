<?php
// PHP program to describes header function
  
// Redirect the browser
header("Location: file2.php");
  
// The below code does not get executed 
// while redirecting
exit;
  
?>