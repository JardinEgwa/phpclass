<?php
$num1=65;
$num2=100;
$num3=500;
$num4="500";
$name1="Jardin";
$name2=" Egwa";

//Arithmetic operators
echo $num1+$num2; //Addition operator
echo "<br>";
echo $num1*$num2; //Multiplication operator
echo "<br>";
echo $num2-$num1; //Subtraction operator
echo "<br>";
echo $num2/$num1; //Division operator
echo "<br>";
echo $num2%$num2; //Modulus operator
echo "<br>";

//Comparison operators
var_dump($num3==$num4); //equal to operator
echo "<br>";
var_dump($num3===$num4); //identical operator
echo "<br>";
var_dump($num1>$num2); //greater than operator
echo "<br>";
var_dump($num2>=$num4); //greater or equal to operator
echo "<br>";
var_dump($num2<$num3); //less than operator
echo "<br>";
var_dump($num3<=$num4); //less than or equal to operator
echo "<br>";
var_dump($num4!=$num3); //not equal to operator
echo "<br>";

//Logical operators
var_dump($num1>=$num2 or $num2<=$num4);
echo "<br>";

//string operators
echo $name1 . $name2;
