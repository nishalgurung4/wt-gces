<?php

if (!isset($_COOKIE['user'])) {
	header("location: login.php");
}
echo "Welcome User: ".$_COOKIE['user'];