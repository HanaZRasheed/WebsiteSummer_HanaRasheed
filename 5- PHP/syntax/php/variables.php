<?php
/* author: Hana Alrasheed
PHP Syntax
*/
// variable name with data type string
$name="Ahmad";
// variable id with data type integer
$id=20223;
// variable gpa with data type float
$gpa=3.5;
// variable isGrad with data type boolean
$isGrad=True;
// array courses with elements of strings
$courses=array("Web development","Programming","Database");
// accessing array elements with index starting from 0 to 2 
echo $courses[0]. "<br>";
echo $courses[1]. "<br>" . $courses[2]. "<br>";


// count is used to know the number of elements in the array
$size=count($courses);
/* for loop is used to print the elements in the array by there 
indexes and using the count function
as stop condition*/
echo "Number of elements is ". $size ."<br>";
for($i=0;$i<$size;$i++){
    echo $courses[$i]. "<br>";
}

// define a constant with name MAJOR and value Computer Science 
define('MAJOR','Computer Science');
// defined constant can't be redifined
// the following sentence shows a warning message that MAJOR constant is already defined
define('MAJOR','Data Science');
echo MAJOR;
?>