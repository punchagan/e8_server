<?php
session_start();
include("includes/jjj.inc");

$connection = mysql_connect($host, $user,$password)
         or die ("Couldn't connect to server.");

$db = mysql_select_db($database, $connection) 
	or die ("could not access db");

$sql = "SELECT * FROM postTab WHERE tid=$thread";

$result = mysql_query($sql);

print "Speak your hearts out on:<br><br>";

print "$tname<br><br>";
if($playStat='yes')
{
	print "Chattering started by:  <a href='profile.php?player=$tuser'>$tuser</a><br>";
}
else
{
	print "Chattering started by:  $tuser <br>";
}

print "<br><hr><br>";

while($rows = mysql_fetch_array($result))
{
	extract($rows);
	if($player=='yes')
	{
		print "By <a href='profile.php?player=$userName'>$userName</a><br><br>$post<br><br><hr><br>";
	}
	else
	{
		print "By $userName<br><br>$post<br><br><hr><br>";
	}
}
print "<br><br><a href='start_post.php'>Chatter away(only sollu, kudirithe koncham sense)</a>";
?>
