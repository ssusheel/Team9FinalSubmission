<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css" type="text/css">
<title>Quest</title>
</head>
<body>
	<div id="container">
		<header>
			<h1><span class="blue-text">Quest</span> Alliance</h1>
			<h2>Wel<span class="white-text">come</span></h2>
		</header>
		
		<nav id="menu">
			<ul><li class="menuitem"><a href="./home.html">Log Out</a></li>

			</ul>
	    </nav>
		 
		
	<section>
			<h3>List of Jobs</h3>
			Enter Company Id:<input type="text" name="loc" id="loc"><br/><br/>
			<?php 
			include("config.php");
			$sql="select name,job_name,locality,id from jobs natural join employer;";

$result=mysql_query($sql);

echo "<table border='1'>
<tr>
<th>Company Name</th>
<th>Job Name</th>
<th>Locality</th>
<th>Employee ID </th>
</tr>";




while($row = mysql_fetch_array($result))
  {
	
	 echo "<tr>";
	//echo "<input type="checkbox" name="check[]" value="$i++">";
	echo "<td>" . $row['name'] . "</td>";
	echo "<td>" . $row['job_name'] . "</td>";
	echo "<td>" . $row['locality'] . "</td>";
	echo "<td>" . $row['id'] . "</td>";
	echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?><form action="PO3.php" method="post">
			<input type="submit" value="Next">	</form>		
    </section>
	
</div><!--container end-->
	<div style="clear;both"></div>
	<footer>
		<marquee> Copyright &copy; 2014, Quest Alliance </marquee>
	</footer>
</body>
</html>
