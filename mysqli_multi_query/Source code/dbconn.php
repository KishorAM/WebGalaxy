<?php 
	
	// Connect to mysql server
	$mysqli = new mysqli("localhost","root","root","test");

	// Check for error
	if(mysqli_connect_errno())
	{
		echo "Connection failed : " . mysqli_connect_error();
		exit;
	}
?>