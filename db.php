<?php 
	$connection = new mysqli("localhost", "root", "", "cars");

	$connection->query("SET NAMES utf8");

	if ($connection->connect_error) {
		echo "error";
	}


?>