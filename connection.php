<?php
$myservername="localhost";
$myusername="root";
$mypass="";
$mydb="";
//connect to the database
$connect=new mysqli($myservername,$myusername,$mypass,$mydb);

//checking the connection
if ($connect->connect_error){
    die("it did not connect to db".$connect->connect_error);
}else{
    echo "Connected successfully";
}
