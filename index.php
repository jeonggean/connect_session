<?php
session_start();
?>

<h2>Login</h2>

<form method="POST" action="cek_login.php">

Username <br>
<input type="text" name="username"><br><br>

Password <br>
<input type="password" name="password"><br><br>

<input type="submit" value="LOGIN">

</form>