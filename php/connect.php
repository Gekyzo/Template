<?php
	define ('DB_USER', 'test');
	define ('DB_PASSWORD', 'test');
	define ('DB_HOST', 'localhost');
	define ('DB_NAME', 'test');

	$conn = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL: ' . mysqli_connect_error());
	$conn->set_charset("utf8");
?>
