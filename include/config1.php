<?php
//define constants for connection info
define("MYSQLUSER","jc499636");
define("MYSQLPASS","Password1");
define("HOSTNAME","localhost");
define("MYSQLDB","jc499636_final");

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

