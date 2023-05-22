<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
</head>
<body>
	<h1>
	<?php
$arr=array("name"=>"Deepak", "age"=>21, "marks"=>75);
echo "Name:".$arr["name"]."</br>";
echo "Age".$arr["age"]."</br>";
echo "Marks".$arr["marks"]."</br>";
//another way to display contents
foreach($arr as $k => $v) {
echo "Key: ".$k." Value: ".$v."<br/>";
}
?>
	</h1>
</body>
</html>
