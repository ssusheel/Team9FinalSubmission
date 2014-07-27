<?php

session_start();
include("config.php"); //including config.php in our file

if(!empty($_GET['usname']) && !empty($_GET['passw'])){
$usname = $_GET["usname"]; //Storing username in $username variable.
$passw = $_GET["passw"];
$inst_name = $_GET["inst_name"];
$name = $_GET["name"];
$contactno = $_GET["contactno"];
 //Storing password in $password variable.

 }

$query = "INSERT INTO placement_officer (uname,pass,inst_name,name,contactno) VALUES ('".$usname."','".$passw."','".$inst_name."','".$name."',".$contactno.");";
mysql_query($query);

header("location:PO2.html");

?>

