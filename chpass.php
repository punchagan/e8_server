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
	if($change)
		{
			if($oldpass=='' || $newpass1=='' || $newpass2=='')
			{
				$msg= "Please, Fill All Fields<br>";
				include ("includes/chpass_form.inc");
			}
		
			else if($newpass1!=$newpass2)
			{
				$msg= "Passwords Do Not Match";
				include ("includes/chpass_form.inc");
			}

			else
			{
				$connection = mysql_connect($host, $user, $password)
	         or die ("Couldn’t connect to server.");
		
				$db = mysql_select_db($database, $connection)
	         or die ("Couldn't select database.");
				
				$sql = "SELECT userName FROM members
               WHERE userName='{$_SESSION['logname']}'
					AND passwd='$_POST[oldpass]'";

				
				$result = mysql_query($sql)
				or die ("Couldn't execute query-password.");
				
				$num=mysql_num_rows($result);
				
				if($num)
				{
					$update = "UPDATE members
									SET passwd='$_POST[newpass2]'
               				WHERE userName='{$_SESSION['logname']}'";

					$result = mysql_query($update) or die ("thu");
					print "Your Password has been Successfully Updated";
					
				}
				
				else
				{
					print "Wrong Password.";
					include("includes/chpass_form.inc");
				}
			}

		}
	else
		{
			include("includes/chpass_form.inc");
		}

}	

?>
