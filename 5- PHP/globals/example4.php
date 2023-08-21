<?php

$name="Musab";
$school="HTU";
function sayHello(){
  
  echo " <h2> Hello ". $GLOBALS['name'] ."</h2>";
  echo " <h2> your study at ". $GLOBALS['school'] ."</h2>";
}

sayHello();
?>