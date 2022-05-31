<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

//indexed array
$cars=array("volvo","toyota","nissan","mazda","ford");
$cars[0]="subaru";
echo "Cars are: $cars[0],$cars[1],$cars[2],$cars[3],$cars[4],$cars[5]";
echo "<br>";
echo "My favorite car is $cars[2]";
echo "<br>";
echo "The worst car is $cars[0] and the best car is $cars[4]";
echo "<br>";
$num=array(50,100,200,40);
var_dump($num);
sort($num);
echo "<br>";


//associative array
$cars2=array("volvo"=>"50","toyota"=>"100","nissan"=>"200");
echo "Toyota speed is " . $cars2['toyota']." km/h.";
echo "<br>";
echo "Nissan speed is " . $cars2['nissan']." km/h.";
echo "<br>";
echo "Volvo speed is " . $cars2['volvo']." km/h.";
echo "<br>";

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";
echo "<br>";
$name=array("35"=>"Peter","37"=>"Ben","43"=>"Joe");
echo "The student that is 43 years is " . $name[43];
echo"<br>";
////
$num=array(50,100,200,40);
var_dump($num);
unset($num[2]);
$num