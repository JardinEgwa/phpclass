<?php
$num1=76;
$num2=23;
$age=17;
$marks=100;
$marks2=100;

//if statement
if ($num1>$num2){
   echo "$num1 is greater than $num2";
}
echo "<br>";

if ($age>=18) {
    echo "Allowed entry";
}
echo "<br>";

//if...else statement
if ($num1<$num2) {
    echo "$num1 is greater than $num2";
}else{
    echo  "$num1 is not greater than $num2";
}
echo "<br>";

if ($age>=18) {
    echo "Allowed entry";
} else{
    echo "Entry prohibited";
}
echo "<br>";

//if...elseif...else
if ($marks<=39 && $marks>0){
    echo "You have failed";
}elseif($marks<=60 && $marks>=40) {
    echo "Pass";
}else{
    echo "invalid number";
}
echo "<br>";
if ($marks2>=80 && $marks2<=99) {
    echo "A";
}elseif($marks2>=75 && $marks2<=79) {
    echo"A-";
}elseif ($marks2>=70 && $marks2<=74) {
    echo "B+";
}elseif ($marks2>=65 && $marks2<=69) {
    echo "B";
}elseif ($marks2>=60 && $marks2<=64) {
    echo "B-";
}elseif ($marks2=100 or $marks2=0){
    echo "invalid entry";
}else{
    echo "REPEAT TEST";
}

