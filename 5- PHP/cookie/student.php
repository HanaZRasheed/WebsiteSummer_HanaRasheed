<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Info</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="confirmation.php" method="post">

  <div class="container">
    <div>
      <h2> Student Info </h2>
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter your name" name="name" required>

    <label for="id"><b>Id</b></label>
    <input type="text" placeholder="Enter Your Id" name="id" required>
    <br>
    <br>
    <button type="submit" name="submit"> submit</button>
</div>   
</div>

</form>
</body>
</html>