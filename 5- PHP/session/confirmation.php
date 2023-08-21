<?php
session_start();
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $id=$_POST['id'];
    $_SESSION['name']=$name;
    $_SESSION['id']=$id;
}
print_r($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Hello  <?php echo $_POST['name']. ' Your id is '. $_POST['id'];?></h1>
    <a href="destroy.php"> Destroy session </a>
</body>
</html>