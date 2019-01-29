<?php
//define constants for connection info
define("MYSQLUSER","team11nov18");
define("MYSQLPASS","Carrental@123");
define("HOSTNAME","localhost");
define("MYSQLDB","team11nov18_carrental");

//make connection to database
function db_connect()
{
	$conn = @new mysqli(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB);
	if($conn -> connect_error) {
		die('Connect Error: ' . $conn -> connect_error);
	}
	return $conn;
} 
?>


