<html>
<head>
<title>Upload Profile Pic</title>
</head>
<body>
<div align='center'>
<form enctype='multipart/form-data' action='uploadFile.php' method='POST'>
	<input type='hidden' name='MAX_FILE_SIZE' value='500000'>
	<input type='file' name='pic' size='60'>
	<p><input type='submit' name='uploadpic' value='Upload Picture'>
</form></div>
</body>
