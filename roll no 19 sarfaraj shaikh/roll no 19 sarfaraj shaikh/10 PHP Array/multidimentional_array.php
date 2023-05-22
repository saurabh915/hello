<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
</head>
<body>
	<h1>
	<?php
$c=array(
array("name"=>"Rohan", "age"=>20),
array("name"=>"Rohit", "age"=>30)
);
echo $c[0]["name"]."<br/>";
echo $c[0]["age"]."<br/>";
echo $c[1]["name"]."<br/>";
echo $c[1]["age"]."<br/>";
foreach($c as $a)
{
foreach($a as $k=>$v)
{
echo "$k....$v"."</br>";
}
}
?>
	</h1>
</body>
</html>
