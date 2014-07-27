<?php
session_start();
include("config.php"); //including config.php in our file
include("employer2.html");

if(!empty($_GET['username']) && !empty($_GET['password'])){

$name = $_GET["cn"]; //Storing username in $username variable.
$comid = $_GET["comid"];
$contact = $_GET["contact"];
$username = $_GET["username"];
$password = $_GET["password"]; //Storing password in $password variable.
$query = "INSERT INTO employer (name,id,user_name,password,contact) VALUES ('".$name."',".$comid.",'".$username."','".$password."',".$contact.");";
//$query="select * from employer";
mysql_query($query);
echo "entered";

header("location:emp.html");

// It is the page where you want to redirect user after login.

}

?>