<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Confirmation Get </title>
</head>
<body>

<?php print_r($_GET);?>
    <h1> Hello  <?php echo $_GET['name']. ' Your id is '. $_GET['id'];?>
</h1>
</body>
</html>