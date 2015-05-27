
<!DOCTYPE html>
<html>
<head>
	<title>Process page</title>
</head>
<body>
<form method="POST" enctype="multipart/form-data" action="Process.php">
<table>
	<tr>
		<td>ID :</td>
		<td><input type="text" name="id" /></td>
	</tr>
	<tr>
		<td>Name :</td>
		<td><input type="text" name="name"/></td>
	</tr>
	<tr>
		<td>File upload :</td>
		<td><input type="file" name="userfile" value=" " /></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="submit"/></td>
	</tr>
</table>

</form>
</body>
</html>