<?php
if(isset($_COOKIE['name']) && isset ($_COOKIE['id']) ){
    echo "<p> name value is " . $_COOKIE['name'] . "</p>";
    echo "<p> id value is " . $_COOKIE['id'] . "</p>";
}
    
?>