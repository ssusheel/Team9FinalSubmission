<?php

session_start();
include("config.php"); //including config.php in our file


$usname = $_GET["inst"]; //Storing username in $username variable.
$passw2 = $_GET["skill"];
$passw3 = $_GET["name"];
$passw4= $_GET["preloc"];
$passw5 = $_GET["dob"];
$passw6 = $_GET["contact"];
$passw7 = $_GET["fname"];
$passw8 = $_GET["as"];




 //Storing password in $password variable.

 }

$query = "INSERT INTO  student VALUES ('".$usname."','".$passw2."','".$passw4."','".$passw5."','".$passw7."',".$passw6.",'".$passw7."','".$passw8."');";
mysql_query($query);
echo "done uploading";


?>


