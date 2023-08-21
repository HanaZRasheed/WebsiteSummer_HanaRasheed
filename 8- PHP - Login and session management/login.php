<?php

session_start();
require("connect.php");

if(isset($_POST['login'])){
    $sql="SELECT * from login where username=:username and password=:password";
    $statement=$pdo->prepare($sql);
    $username=$_POST['username'];
    $password=$_POST['password'];

    $statement->bindParam(":username",$username,PDO::PARAM_STR);
    $statement->bindParam(":password",$password,PDO::PARAM_STR);
    $statement->execute();
    $count=$statement->rowCount();
    if($count==1){
        $_SESSION['privilleged']=$username;
        header("location:home.php");
    }else{
        echo "Invalid username or password";
    }
    $pdo=null;

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login </title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<form method="POST">
  <div class="login-container"> 
  <h2>Login Here</h2>
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username"  required>
    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password"  required> 
    <button  id="login-btn" type="submit" name="login">Login</button>
    
    <a  class="reg-link" href="register.php" > Register Here </a>
  </div>
</form>
</body>
</html>