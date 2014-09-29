<?php

print"
<form method='post' action=''>
	<table>
	<tr><td>Name:</td><td>$userName</td></tr>
	<tr><td>Batting Style*:</td><td><input type='text' name='bathand' size='20' maxlength='50' value='$bathand'></td></tr>
	<tr></tr><br>
	<tr><td>Bowling Style*:</td><td><input type='text' name='bowlinfo' size='50' maxlength='50' value='$bowlinfo'></td></tr>
	<tr><td></td></tr>
	<tr><td>Date of Birth*:</td><td><input type='text' name='dob' size='10' maxlength='10' value='$dob'>yyyy-mm-dd</td></tr>
	<tr></tr>
	<tr><td>Hometown:</td><td><input type='text' name='home' size='20' maxlength='20' value='$home'></td></tr>
	<tr></tr>
	<tr><td>Height:</td><td><input type='text' name='htft' size='1' maxlength='1' value='$htft'>ft <input type='text' name='htin' size='2' maxlength='2' 		  		value='$htin'> in</td></tr>
	<tr></tr>
	<tr><td>Weight:</td><td><input type='text' name='wt' size='3' maxlength='3' value='$wt'>kg</td></tr>
	<tr></tr>
	<tr><td>Been Playing Cricket since:</td><td><input type='text' name='xp' size='2' maxlength='2' value='$xp'>yrs</td></tr>
	</table>
	<input type='submit' name='update' value='Update' size='10'></form>";

if (isset($msg))
	echo	"$msg";
?>
