<?php
      if (isset($message))
       echo "$message";
?>

<form method = "post"
       action = "">
<table>
<tr><td>Enter Login:</td>
<td><input type = "text"
        name = "userName"
        value = "">
</td></tr>
<tr><td>Enter Password:</td>
<td><input type = "password"
        name = "passwd"
        value = "">
</td></tr>
</table>
<input type = "submit" value ="Login" name="submitted">
</form>
