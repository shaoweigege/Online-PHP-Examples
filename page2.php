<?php
# starts the section and bring everything in it from the index page.
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
	echo $_SESSION['username'];
	 ?>
</body>
</html>
