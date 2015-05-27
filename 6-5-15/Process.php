<?php 

	include 'conn.php';

	if($_POST)
	{
		$target = "DOC/";	
		$DIR = $target . basename($_FILES['userfile']['name']);

		$id = $_POST['id'];
		$name = $_POST['name'];
		$upload = ($_FILES['userfile']['name']);

		
		$sql = "UPDATE info SET name = ?, upload = ? WHERE id = ?";

		if(!($stmt = $mysqli->prepare($sql)))
		{
			die("Unable to prepare statement");
		}
		else
		{
			$stmt->bind_param("ssi", $name, $upload, $id);	
			
			if($stmt->execute())
			{
				echo "Successfully updated";
			}
			else
			{
				die("Update failed");
			}
		}
		
		$stmt->close();
		$mysqli->close();

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
	}
?>