<?php
$courses=array('programming','advanced programming','data structures');
echo $courses[0];
echo "</br> number of courses is " .count($courses);
echo "</br>";
print_r($courses);

echo "<ul>";
echo "<h3> your courses: </h3> ";
for($i=0; $i<count($courses);$i++){
echo "<li>   $courses[$i] </li>";
}
echo "</ul>";

echo "<h3> your courses: </h3> ";
echo "<ul>";
foreach ($courses as $course){
  echo "<li> $course </li>";
}
echo "</ul>";

?>