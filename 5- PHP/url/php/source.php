<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Source</title>
</head>
<body>
    <h1> source page </h1>
    <?php
    $name="Yazan";
    $id=20090;
    header('Location:distination.php?name='.$name.'&id='.$id);
    ?>
</body>
</html>