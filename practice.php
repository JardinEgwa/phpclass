<?php
$cars=array("volvo","toyota","nissan");
$cars2=array("volvo"=>"50","toyota"=>"100","nissan"=>"200");
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

echo "Cars are: $cars[0],$cars[1],$cars[2]";
echo "<br>";
echo "Peter is " . $age['Peter'] . " years old.";
echo "<br>";
echo "Toyota speed is " . $cars2['toyota']." km/h.";
echo "<br>";
echo "Nissan speed is " . $cars2['nissan']." km/h.";
echo "<br>";
echo "Volvo speed is " . $cars2['volvo']." km/h.";
echo "<br>";


