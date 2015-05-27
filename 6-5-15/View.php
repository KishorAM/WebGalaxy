<!DOCTYPE html>
<html>
<head>
	<title>Update page</title>
</head>
<body>
<?php 
		
	// Connect to db.
	include 'conn.php';

	// Display from db.
	$sql = 'SELECT `id`, `name`, `upload` FROM `info`';
	$result = $mysqli->query($sql);

	// Check if it was successfull.
	if($result)
	{
		// Make sure some data exist.
		if($result->num_rows == 0)
		{
			echo '<p>No data found...</p>';
		}
		else
		{
			// Print the top of a table.
			echo '<table width="100%">
					<tr>
						<td><b>ID</b></td>
						<td><b>Name</b></td>
						<td><b>Files</b></td>
						<td><b>Action</b></td>
					</tr>';

			// Print data.
			while($row = $result->fetch_assoc())
			{
				echo  "<tr>
							<td>{$row['id']}</td>
							<td>{$row['name']}</td>
							<td>{$row['upload']}</td> 
							<td><a href='Update.php?id={$row['id']}'>Edit</a></td>
					   </tr>";

			}
			echo '</table>';

		}
		// Free the result.
		$result->free();
	}
	else
	{
		echo 'Error : SQL query failed...';
	}
	$mysqli->close();
	
?>
</body>
</html>