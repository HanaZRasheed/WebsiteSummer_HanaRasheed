<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
  $x =5;
  $y =10;

  myTest();
  
  function myTest(){
    global $x, $y;
    $result=   $x+  $y;
    ECHO $result;
}

  ?>
</body>
</html>