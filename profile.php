<?php
	include("includes/jjj.inc");
	
	$connection = mysql_connect($host, $user,$password)
	    or die ("Couldn't connect to server.");
	$db = mysql_select_db($database, $connection) or die ("could not access db");
	
	$sequel = "SELECT * FROM members
   	     WHERE userName='$player'";
	$result = mysql_query($sequel) 
			or die("could not perform query");	
	
	$num = mysql_num_rows($result);
	
	if(!num)
	{ 
		print 'Player Profile Doesn\'t Exist<br>';
		print "<a href='teams.html'>Back to Teams</a>"; 
	}



	else
	{
		$row = mysql_fetch_array($result);
		extract($row);		
		include("includes/profile_disp.inc");
	}
?>
