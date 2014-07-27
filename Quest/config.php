<?php
$database = "Quest";  // the name of the database.
$server = "localhost";  // server to connect to.
$db_user = "root";  // mysql username to access the database with.
$db_pass = "cfg2014!";  // mysql password to access the database with.
    // the table that this script will set up and use.
$link = mysql_connect($server, $db_user, $db_pass);
mysql_select_db($database,$link);
?>
