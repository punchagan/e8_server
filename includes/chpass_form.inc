<?php
      if (isset($msg))
       echo "$msg";
?>

<form method = "post"
       action = "">
<table>

<tr><td>Enter Old Password:</td>
<td><input type = "password"
        name = "oldpass"
        value = "">
</td></tr>
<tr><td>Enter New Password:</td>
<td><input type = "password"
        name = "newpass1"
        value = "">
</td></tr>
<tr><td>Confirm New Password:</td>
<td><input type = "password"
        name = "newpass2"
        value = "">
</td></tr>
</table>
<input type = "submit" value ="Change" name="change">
</form>
