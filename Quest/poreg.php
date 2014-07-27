<?php 
session_start();
include("config.php"); //including config.php in our file
$username = $_GET["pousr"]; //Storing username in $username variable.
$password = $_GET["popswd"]; //Storing password in $password variable


$match = "select uname from placement_officer where uname = '" .$username."' and pass = '".$password."';"; 

$qry = mysql_query($match);

$num_rows = mysql_num_rows($qry); 



if ($num_rows <= 0) { 

echo "Sorry, there is no username $username with the specified password.";

echo "Try again";

exit; 

} else {



$_SESSION['user']= $_POST["pousr"];

header("location:PO2.php");

// It is the page where you want to redirect user after login.

}
?>