<?php
if(isset($_POST['submit'])){
    move_uploaded_file($_FILES['file']['tmp_name'], "uploaded/".$_FILES['file']['name']);
    echo "<h1 style='color:green'> file is uploaded successfully </h1>";
}

#print_r($_FILES['file']);


?>