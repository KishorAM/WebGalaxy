<?php
$con=mysqli_connect("localhost","my_user","my_password","my_db");
// Check connection
if (mysqli_connect_errno())
	{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

$sql = "SELECT Lastname FROM Persons ORDER BY LastName;";
$sql .= "SELECT Country FROM Customers";

// Execute multi query
if (mysqli_multi_query($con,$sql))
{
		// Store first result set
	do
		{
		if ($result=mysqli_store_result($con))
			{
			while ($row=mysqli_fetch_row($result))
				{   
				printf("%s\n",$row[0]);
				}
			mysqli_free_result($con);
			}
		}
	while (mysqli_next_result($con));
}

mysqli_close($con);

mysqli_debug("d:t:o,/Debug/info.trace");
?>