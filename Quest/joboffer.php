<?php
session_start();
include("config.php");
include("pj.html");
include("employer2.html"); 
if(!empty($_POST['jn']) ){
$name=$POST['cn'];
$j_name = $_POST["jn"]; //Storing username in $username variable.
$comid = $_POST["jv"];
$contact = $_POST["jr"];
$username = $_POST["loc"]; //Storing password in $password variable.
$description = $_POST["description"];

$query = "INSERT INTO jobs (name,j_name,j_vacancies,description,j_requirements, locality) VALUES ('".$name."','".$jn."','".$jv."','".$description."','".$jr."','".$locality."');";
mysql_query($query);

}
if(!empty($_POST['username']) && !empty($_POST['password'])){

$name = $_POST["name"]; //Storing username in $username variable.
$comid = $_POST["comid"];
$contact = $_POST["contact"];
$username = $_POST["username"];
$password = $_POST["password"]; //Storing password in $password variable.

$query = "INSERT INTO employer (name,id,user_name,password,contact) VALUES ('".$name."','".$comid."','".$username."','".$password."','".$contact."');";
mysql_query($query);
echo "done uploading";

}
?><!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css" type="text/css">
<title>Quest</title>
</head>
<body>
	<div id="container">
		<header>
			<h1><span class="blue-text">Quest</span> Alliance</h1>
			<h2>Wel <span class="white-text">come</span></h2>
		</header>
		
		<nav id="menu">
			<ul>
				<li class="menuitem"><a href="">Employer Home</a></li>
				<li class="menuitem"><a href="pj.html">Post a Job</a></li>
				<li class="menuitem"><a href="recfrmpo.html">Recommendations</a></li>
			</ul>
	    </nav>
		 
		
	<section>
			<img src="images/s1.jpg">
			<p>Hello,Employer!</p>
			<p>Very great to have you</p>

    </section>
	
</div><!--container end-->
	<div style="clear;both"></div>
	<footer>
		<marquee> Copyright &copy; 2014, Quest Alliance </marquee>
	</footer>
</body>
</html>
