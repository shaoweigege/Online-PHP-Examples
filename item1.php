<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Title of the Doc</title>
</head>
<body>

<form method="GET">
	<input type="text" name="person">
	<input type="submit">
</form>

<?php
$name = $_GET['person'];//passing variables, use the same field inside the name of the html attribute
echo $name." is a handsome man!";
echo "<hr>";
echo "<h1>Examples of Functions</h1><br>";
//pre-determinated functions, piece of php that does certainly thing.

echo strlen("Hi Daniel"). "<br>";
echo str_word_count("Hi Daniel"). "<br>";
echo strpos("Hi Daniel", "Daniel"). "<br>";
echo str_replace("Daniel", "Junior", "Hi Daniel" . "<br>");

//Different types of Data
// string
$message = "Code is fun";
//integer
$number_int = 29;
//float
$number_flt = 20.57;
//boolean

//array
$names = array("Daniel","Denis","Michael");
echo $names['2'];
echo "<hr>";
//Aritimetic Operators
echo 5+5 ."<br>";
//Assignment Operators
$varX = 100;
$varX += 20;
echo $varX."<br><hr>";
//Comparospn Operators and if else statement.
$x = 5;
$y = 10;
if ($x == $y){
	echo "true";
}
else {
	echo "false";
}
echo "<hr>";
//Increment and Decrement Operators
$a = 25;
echo $a. "<br>";
echo $a++;
echo $a ."<br>";
//Logical Operators.
$b = 10;
$c = 20;
#xor - one condition has to be true, but just one.
if($b == $c || 1 == 1){
	echo "True";
}





















?>

</body>
</html>
