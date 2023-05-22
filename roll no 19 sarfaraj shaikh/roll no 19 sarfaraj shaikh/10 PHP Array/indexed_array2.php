<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
</head>
<body>
	<h1>
	<?php
/* Second method to create array. */ 
$numbers[0] = "one"; 
$numbers[1] = "two"; 
$numbers[2] = "three";
$numbers[3] = "four"; 
$numbers[4] = "five"; 
foreach( $numbers as $value )
{ 
echo "Value is $value <br />"; 
} 
?> 
	</h1>
</body>
</html>
