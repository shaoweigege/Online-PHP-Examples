<?php
/*
$GLOBALS
$_POST
$_GET
$_COOKIE
$_SESSION
*/

echo $_GET['name'];

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title></title>
 	<link rel="stylesheet" href="">
 </head>
 <body>
 	<form method="GET">
 		<input type="hidden" name="name" value="value">
 		<button type="submit">Press me!</button>
 	</form>

 </body>
 </html>
