<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Calculator leni homework</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form>
		<input type="text" name="number1" placeholder="enter first number">
		<input type="text" name="number2" placeholder="enter the second number"><br>
		Select what would you like to do:
		<select name="selectone">
			<option>Add</option>
			<option>Sub</option>
			<option>Mul</option>
			<option>Div</option>
		</select><br>

		<button type="submit" name="submit"> Calculate</button>
		<hr>
		<h1>The result is : </h1>
	</form>
	<?php

	$number1 = $_GET['number1'];
	$number2 = $_GET['number2'];
	#important to have an operator since the switch gets only the variable.
	$operation = $_GET['selectone'];

	switch ($operation) {
		case "Add":
			# code...
			echo $number1 + $number2;
			break;
		case "Sub":
			# code...
			echo $number1 - $number2;
			break;
		case "Mul":
			# code...
			echo $number1 * $number2;
			break;
		case "Div":
			# code...
			echo $number1 / $number2;
			break;
		}
	 ?>

</body>
</html>
