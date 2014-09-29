<?php

	if($pic=='1')
	{
		echo "<p><img src='uploads/$userName' align='right' height='256' width=''></img></p>";
	}
	else
	{
	echo "<p><img src='uploads/nopic.jpg' align='right' height='256' width='192'></img></p>";
	}

echo"
	<table>
	<tr><td>People Call Me $player</td></tr>
	<tr><td>I am a $bathand Batsman</td></tr>
	<tr><td>I am a(n) $bowlinfo Bowler</td></tr>
	<tr><td>Given out on $dob</td></tr>
	<tr><td>My Home Ground -- $home</td></tr>
	<tr><td>My Body Length's $htft'  $htin\"</td></tr>
	<tr><td>Pull me at $wt kgf</td></tr>
	<tr><td>I've been Handling the Ball since $xp yrs</td></tr>

";
?>
