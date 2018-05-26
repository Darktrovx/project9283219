<?php

 	$host = "localhost";
 	$user = "root";
 	$pass = "root";

 	$databaseName = "fightniteDB";
	$tableName    = "tournaments";

	// Get data from databate
	$conn = mysqli_connect($host, $user, $pass, $databaseName);
	// Get data from user table
	$result = mysqli_squery($conn "SELECT * FROM $tableName");
	$data = array();
	
	// Store data in an array
	while ($row = mysqli_fetch_assoc($result))
	{
		$data[] = $row;
		
	}

	// Return data
	echo json_encode($data);
	
?>
