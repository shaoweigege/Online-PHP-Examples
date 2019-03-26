<?php
#start the sections on the website and lock in!
session_start();
 ?>
 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Creating Sections</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<ul>
			<li><a href="creatingsections.php">home</a></li>
			<li><a href="page2.php">contact</a></li>
		</ul>

<?php

$_SESSION['username'] = "siath00";
echo $_SESSION['username'];

if (!isset($_SESSION['username'])){
	echo "You are not logged in!";
}
else{
	echo "You are logged in!!";
}
 ?>







</body>
</html>
