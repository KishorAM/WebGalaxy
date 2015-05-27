<!DOCTYPE html>
<html>
<head>
	<title>New Record</title>
</head>
<body>
<form method="POST" action="Add.php" enctype="multipart/form-data"> 
	ID : <input type="text" name="id"><br>
	Name : <input type="text" name="name"><br>
	<input type="hidden" name="MAX_FILE_SIZE" value="800000000"><br>
	File Upload : <input type="file" name="userfile"/><br>
	
<br/><br/>
<button type='reset' id='clear'>Clear</button> 
<button type='submit' id='send'>Submit</button>

</form>

</body>
</html>