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
	if(!isset($_POST['uploadpic']))
	{
		echo "Max Limit for File Size 500KB";		
		include ("includes/upload_form.inc");
	}
	else
	{
		if($_FILES['pic']['tmp_name'] == "none")
		{
			echo "<b> File did not successfully upload. Check the file size. File must be less then 500K<b>";
			include("includes/upload_form.inc");
			exit();
		}
	
		if(!ereg("image",$_FILES['pic']['type']))
		{
			echo "<b> File is not a picture. Please try another file.</b><br>";
	//		echo $_FILES['pic']['type'];
			include("includes/upload_form.inc");
			exit();
		}
		
		else
		{
			$uploaddir = "/home/learner/e8_server/uploads/";
			$uploadfile = $uploaddir.$_FILES['pic']['name'];		
			$temp_file = $_FILES['pic']['tmp_name'];
	//		print $_FILES['pic']['type'];
			$newname="{$_SESSION['logname']}";
			$newname=strtolower($newname);
			if(move_uploaded_file($temp_file, $uploadfile))
			{				
				echo "<p><b> The File {$_FILES['pic']['name']}({$_FILES['pic']['size']}B) has been Successfully uploaded</b></p>";
				rename($uploaddir.$_FILES['pic']['name'],$uploaddir.$newname);
	
				$connection = mysql_connect($host, $user,$password)
		         or die ("Couldn't connect to server.");
				$db = mysql_select_db($database, $connection) or die ("could not access db");
				
				
				$pic = ("UPDATE members
							SET pic='1'
							WHERE userName='{$_SESSION['logname']}'");
				$yes=mysql_query($pic) or die ("Could not Upload Pic");		

				
			}
			else
			{
					echo "File Upload Failed";
				}
			}	
		
		}
	}
?>
