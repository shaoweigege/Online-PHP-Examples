<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Calculator with PHP</title>
</head>
<body>
	<form>
		<input type="text" name="num1" placeholder="number1">
		<input type="text" name="num2" placeholder="number2">
	<select name="operator">
		<option>None</option>
		<option>Add</option>
		<option>Subtract</option>
		<option>Multiply</option>
		<option>Dividi</option>
	</select><br>
	<button name="submit" value="submit" type="submit">Calculate</button>
	</form>
	<p>The answer is: </p>

	<?php
		if (isset($_GET['submit'])){
			$result1 = $_GET['num1'];
			$result2 = $_GET['num2'];
			$operator = $_GET['operator'];

			switch ($operator) {
				case "None":
					# code...
					echo "You need to select something.";
					break;
				case "Add":
					# code...
					echo $result1 + $result2;
					break;
				case "Subtract":
					# code...
					echo $result1 - $result2;
					break;
				case "Multiply":
					# code...
					echo $result1 * $result2;
					break;
				case "Dividi":
					# code...
					echo $result1 / $result2;
					break;

				default:
					# code...
					break;
			}
		}

	 ?>

</body>
</html>
