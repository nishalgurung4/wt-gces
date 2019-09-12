<?php

session_start();
if ($_POST['username'] == 'user' && $_POST['password'] == 'user') {
	$_SESSION['user'] = $_POST['username'];
	header("location: dashboard.php");
} else {
header("location: login.php?error=wrong username and password");
}