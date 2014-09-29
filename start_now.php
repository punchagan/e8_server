<?php 
session_start(); 
include("includes/jjj.inc");
if(!($_SESSION['logname']==='punch'))
{
	header("Location: login.php");
}
else
{	
	$connection = mysql_connect($host, $user,$password)
		or die ("Couldn't connect to server.");
	$db = mysql_select_db($database, $connection) or die ("could not access db");
	
	if($start)
	{
		include("includes/newmatch_form.inc");
		$sql = ("INSERT INTO schedule (teamA,teamB,toss,choice,umpire1,umpire2) VALUES('$_POST(teamA)','$_POST(teamB)','$_POST(toss)','$_POST				(choice)','$_POST(umpire1)','$_POST(umpire2)'");

		$result = mysql_query($sql) or die("Couldn't update DATA ");
	}
	
}
?>
