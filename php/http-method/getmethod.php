<?php

echo "Hi";
echo "<br />";
if(isset($_GET['name'])) {
	echo $_GET['name'];
}
echo $_GET['username'];
// echo ($_GET['name']??'');