<?php
session_start();
include("config.php");
include("pj.html");
include("employer2.html"); 
if(!empty($_GET['jn']) ){
$name=$GET["cn"];
$j_name = $_GET["jn"]; //Storing username in $username variable.
$comid = $_GET["jv"];
$jr = $_GET["jr"];
$locality = $_GET["loc"]; //Storing password in $password variable.
$description = $_GET["description"];

$query = "INSERT INTO jobs (name,job_name,job_vacancies,description,job_requirements, locality) VALUES ('".$name."',
'".$j_name."',".$comid.",'".$description."','".$jr."','".$locality."');";
mysql_query($query);
//header("location:pj.html");

}
?>

