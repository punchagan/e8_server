<?php
session_start();
include("includes/jjj.inc");

$connection = mysql_connect($host, $user,$password)
         or die ("Couldn't connect to server.");

$db = mysql_select_db($database, $connection) 
	or die ("could not access db");

$sql = "SELECT * FROM threadTab";

$result = mysql_query($sql) 
	or die("could not perform query");

while($rows = mysql_fetch_array($result))
{
	extract($rows);
	if($player=='yes')
	{
		print "<a href='dispTh.php?thread=$tid&tname=$threadName&tuser=$userName'>$threadName</a>  by  <a href='profile.php?player=$userName'>$userName</a><br>";
	}
	else
	{
		print "<a href='dispTh.php?thread=$tid&tname=$threadName&tuser=$userName&playStat=$player'>$threadName</a>  by  $userName";
	}	
}
print "<br><br><br><br>";

print '<a href="start_thread.php">Start a new thread</a>';
?>

