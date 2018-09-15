<?php

	$server = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "med";

 function getConnection(){

 	$conn = mysqli_connect($GLOBALS['server'], $GLOBALS['dbuser'], $GLOBALS['dbpass'], $GLOBALS['dbname']);

 	return $conn;
 }

?>