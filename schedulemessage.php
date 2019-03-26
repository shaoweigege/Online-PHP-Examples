<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Scheduled Message Programming with PHP</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php

	$dayofweek = date(w);
	switch($dayofweek){
		case 1:
			# code...
			echo "It is Monday!";
			break;
		case 2:
			# code...
			echo "It is Tuesday!";
			break;
		case 3:
			# code...
			echo "<p> It is Wednesday! </p>";
			break;
		case 4:
			# code...
			echo "It is Thursday!";
			break;
		case 5:
			# code...
			echo "It is Friday!";
			break;
		case 6:
			# code...
			echo "It is Saturday!";
			break;
		case 7:
			# code...
			echo "It is Sunday!";
			break;
		}
	 ?>

</body>
</html>
