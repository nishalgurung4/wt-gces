<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		echo ($_GET['error']?? '');

	?>
<form action="process-login.php" method="POST">
	<input type="text" placeholder="Username" name="username" />
	<input type="password" placeholder="Password" name="password" />
	<input type="submit" value="Login" />
</form>
</body>
</html>