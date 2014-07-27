<?php 
session_start();
include("config.php"); //including config.php in our file
$username = $_GET["user"]; //Storing username in $username variable.
$password = $_GET["pass"]; //Storing password in $password variable.

echo $username;
$match = "select user_name from employer where user_name = '" .$username."' and password = '".$password."';"; 
echo $match;

$qry = mysql_query($match);

$num_rows = mysql_num_rows($qry); 



if ($num_rows <= 0) { 

echo "Sorry, there is no username $username with the specified password.";

echo "Try again";

exit; 

} else {



$_SESSION['user']= $_POST["empusr"];

header("location:emp.html");

// It is the page where you want to redirect user after login.

}
?>