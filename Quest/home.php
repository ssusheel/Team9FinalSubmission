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

$query = "INSERT INTO placement_officer (uname,pass,inst_name,name,contactno) VALUES ('".$usname."','".$passw."','".$inst_name."','".$name."','".$contactno."');";
mysql_query($query);
echo "done uploading";


?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css" type="text/css">
<title>Quest</title>
</head>
<body>
	<div id="container">
		<header>
			<h1><span class="blue-text">Quest</span> Alliance</h1>
			<h2>Wel<span class="white-text">come</span></h2>
		</header>
		
		<nav id="menu">
			<ul>
				<li class="menuitem"><a href="home.html"> Home </li>
				<li class="menuitem"><a href="employer.html">Employer</a></li>
				<li class="menuitem"><a href="PO.html">Placement Officer</a></li>
				<li class="menuitem"><a href="student.html">Student</a></li>
			</ul>
	    </nav>
		 	<section>
			<h2>Welcome to Quest Alliance </h2>
			<img class="float" src="images/quest.jpg" alt="Quest Image">
			<img class="float" style="top:35px; left:170px; width:400px; height:200px" src="images/quest2.jpg">
			<h3>Who Are We?</h3>
			<p>The Quality Education and Skills Training (QUEST) Alliance is a not for profit trust that focuses on research-led innovation and advocacy in the field of teaching and learning. It engages with multiple stakeholders to demonstrate and enable scalable solutions in education and vocational training using Information and Communication Technology (ICT).
We provide children & youth, age 10-30, a set of real-world skills along with opportunities to build confidence in a fun and engaging way that prepares them for work and life.</p>
			<h3>Our Mission</h3>
			<p>Enhancing the quality and relevance of secondary education and work transitions of disadvantaged youth through knowledge creation, innovative action and supporting multi disciplinary collaborations</p>
		</section>
	</div><!--container end-->
	<div style="clear;both"></div>
	<footer>
		<marquee> Copyright &copy; 2014,  Quest Alliance </marquee>
	</footer>
</body>
</html>
