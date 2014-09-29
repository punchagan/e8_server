<?php
session_start();
include("includes/jjj.inc");

if(!$_SESSION['auth'])
{
	header("Location: login.php");
	exit();
}

else
{
	print "Your Profile<br> <br>";
	print "<p><a href='uploadFile.php'>Update Profile Pic</p></a><br>";
	$connection = mysql_connect($host, $user,$password)
	         or die ("Couldn't connect to server.");
	$db = mysql_select_db($database, $connection) or die ("could not access db");
	

	if($update)
	{
		if(!($_POST[bathand] && $_POST[bowlinfo] && $_POST[dob]))
		{
			$msg="Please fill ALL fields marked *";		
			$sql = "SELECT * FROM members 
					WHERE userName='{$_SESSION['logname']}'";
			$result = mysql_query($sql) or die("could not perform query");
			$row = mysql_fetch_array($result);
			extract($row);
			include("includes/edit_form.inc");
		}
	
		else
		{	$change = "UPDATE members
					SET bathand='$_POST[bathand]', bowlinfo='$_POST[bowlinfo]', dob='$_POST[dob]', home='$_POST[home]', htft='$_POST[htft]', htin='$_POST[htin]', wt='$_POST[wt]', xp='$_POST[xp]'
          		WHERE userName='{$_SESSION['logname']}'";
			$result = mysql_query($change) or die("Could not Update DB");
			$msg = "Your Profile Has Been Updated";
			
			$sql = "SELECT * FROM members 
					WHERE userName='{$_SESSION['logname']}'";
			$result = mysql_query($sql) or die("could not perform query");
			$row = mysql_fetch_array($result);
			extract($row);

			include("includes/edit_form.inc");
		}
	}

	else
	{
			$sql = "SELECT * FROM members 
					WHERE userName='{$_SESSION['logname']}'";
			$result = mysql_query($sql) or die("could not perform query");
			$row = mysql_fetch_array($result);
			extract($row);

		$msg = "Please Donot Clear any Fields marked *<br>";
		include("includes/edit_form.inc");
	}		
	

	
}
	
?>




