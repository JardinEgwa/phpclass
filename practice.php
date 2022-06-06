<?php

$color = array('white', 'green', 'red');
foreach ($color as $c) {
    echo "$c, ";
}
sort($color);
echo "<ul>";
foreach ($color as $y) {
    echo "<li>$y</li>";
}
echo "</ul>";
echo "<br>";

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
    echo "$value <br>";}
echo "<br>";

$colour=array ('white','green','red');
sort($colour);
echo "<ul>";
foreach ($colour as $actual){
    echo "<li>$actual</li>";
}
echo "</ul>";
echo "<br>";

$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;
echo asort($ceu);
foreach ($ceu as $country=>$capitalcity){
    echo "The capital city of $country is $capitalcity"."<br>";
}
