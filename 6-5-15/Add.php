<!DOCTYPE html>
<html>
<head>
	<title>Insert page</title>
</head>
<body>
<?php 

	// This is directory where uploaded files will be stored.
	$target  = "DOC/";	
	$DIR 	 = $target . basename($_FILES['userfile']['name']);

	// This gets all other info from the form.
	$id  	= $_POST['id'];
	$name 	= $_POST['name'];
	$upload = ($_FILES['userfile']['name']);

	// Connect to your db.
	include 'conn.php';

	// Set autocommit to off
	$mysqli->autocommit(FALSE);

	$stmt1 = $mysqli->prepare("INSERT INTO `info` (`id`, `name`, `upload`) VALUES(?, ?, ?)");
	$stmt2 = $mysqli->prepare("INSERT INTO `filestore` (`id`,`upload`) VALUES(?,?)");

	// Bind the variables.
	$stmt1->bind_param('ssi', $id, $name, $upload);
	$stmt2->bind_param('si', $upload, $id);

	// Check the condition.
	if($stmt1->execute())
	{
		echo "Successfully inserted into table 1";
	}
	else
	{
		echo "First query failed : " . $mysqli->error;
	}
	$stmt1->close();

	if($stmt2->execute())
	{
		echo "Successfully inserted into table 2";
	}
	else
	{
		echo "Second query failed : " . $mysqli->error;
	}
	$stmt2->close();
	$mysqli->close();

	// Insert to your db.
	
	// $sql = "INSERT INTO `info` (`id`, `name`, `upload`) VALUES(?, ?, ?)";

	// if(!$stmt = $mysqli->prepare($sql))
	// {
	// 	echo "Unable to prepare statement";
	// }
	// else
	// {
	// 	$stmt->bind_param("iss", $id, $name, $upload);

	// 	if($stmt->execute())
	// 	{
	// 		echo "Successfully saved to db"; ?> <br> <?php
	// 	}
	// 	else
	// 	{
	// 		die("Unable to save to db");
	// 	}
	// }

	// $stmt->close();

	// $mysqli->close();

	// Move the uploaded file to the server.
	if(move_uploaded_file($_FILES['userfile']['tmp_name'], $DIR)) 
	{ ?> <br> <?php
		echo "File is uploaded successfully...";
	}
	else
	{ ?> <br> <?php
		echo "Error in uploading a file....."; ?> <br> <?php
		echo "Here is some debugging info";
		print_r($_FILES);
	}
	print "</pre>";
 ?>
</body>
</html>