<?php
function emobilis(){

    $num1=30;
    $num2=600;
    echo "The product of $num1 and $num2 is " .$num1*$num2 ;
    echo "<br>";

}
emobilis();
emobilis();
emobilis();

function studentname($fname, $lname, $age){
    echo "My name is ".$fname ."". $lname  . " and I am $age  years old.";
    echo "<br>";
}

studentname("Jardin"," Egwa", 18);
studentname("Valerie"," Kasana", 19);
studentname("Lorney"," Hawi", 34);
studentname("John"," Mark", 60);
studentname("David"," Jesse", 20);

function BMI($mass, $height)
{
    echo "My BMI is" . $height / $mass*$mass;
    echo "<br>";
}
 BMI(62, 0.5);