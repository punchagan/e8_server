<?php session_start(); 
include("includes/jjj.inc");

$_SESSION['logname']=strtolower($_SESSION['logname']);

if($_SESSION['logname']=='punch')
{
	print "<p><a href='edit_now.php'>Start Live Scoring!</a></p>";
}
include("matches/points_table.html");
print "
<TABLE cellspacing='4' cellpadding='4' border='5'>
<tr><p><td><a href='matches/match1.html'>Match-1 : Kekas vs Shravs</a></p></td><td>Shravs bt Kekas by 4 wickets</td></tr>
<tr><p><td><a href='matches/match2.html'>Match-2 : Flukerz vs Jogi Fans</a></p></td><td>Jogi Fans bt Flukerz by 15 runs</td></tr></Table>";
?>

