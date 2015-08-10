<?php
session_start();

function login($error = ''){
	echo '<div style="border-radius: 25px; padding: 15px; background: #DDDDFF;">';
	echo '<form action="" method="post" autocomplete="on">';
	echo '<table border="0" width="100%">';
	echo '<tr><th align="center">Login:</th></tr>';
	echo '<tr><td align="center"><font color="#FF0000">' . $error . '</font></td></tr>';
	echo '<tr><td align="center"><input type="text" name="user" value="Username"></td></tr>';
	echo '<tr><td align="center"><input type="password" name="pass" value="Password"></td></tr>';
	echo '<tr><td align="center"><input type="submit" name="login" value="Login"></td></tr>';
	echo '</table></form></div>';
	exit();
}
if (isset($_POST['user']) and isset($_POST['pass']) or time() < $_SESSION["time"]) {
	if ($_POST['user'] === $username and $_POST['pass'] === $password or time() < $_SESSION["time"]) $_SESSION["time"] = time() + ($timeout * 60);
	else login('Invalid user/password.');
}
elseif (!isset($_SESSION["time"]) or time() > $_SESSION["time"]) login();

?>