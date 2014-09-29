<?php session_start(); 
include("includes/jjj.inc");
?>
<HTML>
<font color="red">
<BODY>
<?php 

if(!$_SESSION['auth'])
	{	
	print "<A HREF='login.php' target='_top'>Login</A>";
	}
else
	{
	print "Howdy, {$_SESSION['logname']} <br>";
	print "<A HREF='logout.php' target='_top'>Logout</A>";
	}
?>

<ul style="list-style-image: url(images/ball_button.jpg);">
<li><A HREF="intro.html" target="view">Home</A></li>
<li><A HREF="teams.html" target="view">The Teams</A></li>
<li><A HREF="rules.html" target="view">The Rule Book</A></li>
<li><A HREF="groups.html" target="view">The Groups</A></li>
<li><A HREF="scores.php" target="view">Scores</A></li>
<li><A HREF="schedu.html" target="view">Schedule</A></li>
<li><A HREF="arena.html" target="view">The Arena</A></li>
<li><A HREF="forum.php" target="view">Public Post Box</A></li>
<li><A HREF="http://www.orkut.com/Community.aspx?cmm=41377429" target="view">Our LCC @ Orkut</A></li>
</ul>
<?php 

if($_SESSION['auth'])
	{
	$connection = mysql_connect($host, $user,$password)
		   	     or die ("Couldn't connect to server.");
	$db = mysql_select_db($database, $connection)
			or die ("Couldn't select database.");

	$sql = "SELECT restrictEntry FROM members
	  	     WHERE userName='{$_SESSION['logname']}'";

	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
	extract($row);

	if($restrictEntry==1)
	{
		print "<ul><li><A HREF='edit_accounts.php' target='view'>Edit Accounts</A></li>";
	}	
	print "<li><A HREF='accounts.php' target='view'>Tourney Accounts</A></li>";
	print "<li><A HREF='edit.php' target='view'>Edit Profile</A></li>";
	print "<li><A HREF='chpass.php' target='view'>Change Password</A></li></ul>";
	}


?>

<!--<li><A HREF="accounts.html" target="view">Accounts</A></li> -->




</BODY>
</font>
</HTML>
