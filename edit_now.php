<?php 
session_start(); 
include("includes/jjj.inc");
if(!($_SESSION['logname']==='punch'))
{
	header("Location: login.php");
}
else
{	


	if($newm)	
	{
		header("Location: start_now.php");
	}
	if($oldm)
	{
		header("Location: test1.php");
	}
	else
	{
			include("includes/start_scoring.inc");
	}
}
?>
