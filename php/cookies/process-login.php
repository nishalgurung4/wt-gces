<?php

if ($_POST['username'] == 'user' && $_POST['password'] == 'user') {
	setcookie('user', $_POST['username'], time() + (86400 *30)); // 86400 = 1 day
	header("location: dashboard.php");
} else {
header("location: login.php?error=wrong username and password");
}