<?php
session_start();
include("includes/jjj.inc");
if($_SESSION['auth'])
header("Location: index.html");
if($submitted)
{
	$connection = mysql_connect($host, $user,$password)
	         or die ("Couldn't connect to server.");
	$db = mysql_select_db($database, $connection)
	         or die ("Couldn't select database.");

	$sql = "SELECT userName FROM members
   	     WHERE userName='$_POST[userName]'";
	$result = mysql_query($sql)
   	         or die("Couldn't execute query-username.");
	$num = mysql_num_rows($result);

	if($num==1)
	{
		$sql = "SELECT userName FROM members
		        WHERE userName='$_POST[userName]'
		        AND passwd='$_POST[passwd]'";
	
		$result2 = mysql_query($sql)
						or die ("Couldn't execute query-password.");

		$num2= mysql_num_rows($result2);
		
		if($num2==1)
		{
      
			$_SESSION['auth']="yes";
			$logname=$_POST['userName'];
			$_SESSION['logname'] = $logname;
			$today = date("Y-m-d h:m:s");
			$sql = "INSERT INTO login (userName,loginTime)
			        VALUES ('$logname','$today')";
			mysql_query($sql) or die("Can't execute query.");
	
			header("Location: index.html"); 
			
		}
	
		else
		{
			$message="Password Invalid. Please try	again.<br>";	
			include("includes/login_form.inc");
		}

	}
	else if($num==0)
	{
		$message="Login Name invalid";
		include("includes/login_form.inc");
	}
}
else
{
include("includes/login_form.inc");
}
?>


