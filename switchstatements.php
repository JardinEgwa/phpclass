<?php
$car="Porsche";
$marks=70;
//switch...case
switch ($car){
    case "Toyota";
        echo "I like Toyota Cars";
        break;
    case "Nissan";
        echo "I like Nissan Cars";
        break;
    case "Subaru";
        echo "I like Subaru Cars";
        break;
    case "Porsche";
        echo "I like Porsche Cars";
        break;
    case "Buggati";
        echo "I like Buggati Cars";
        break;
    default:
        echo "inavild entry";




}
echo "<br>";
switch ($marks) {
    case $marks>=80 && $marks<=99;
        echo "A";
        break;
    case $marks>=75 && $marks<=79;
        echo "A-";
        break;
    case $marks>=70 && $marks<=74;
        echo "B+";
        break;
    case $marks>=65 && $marks<=69;
        echo "B";
        break;
    case $marks>=60 && $marks<=64;
        echo "B-";
        break;
    default:
        echo "error";
}
