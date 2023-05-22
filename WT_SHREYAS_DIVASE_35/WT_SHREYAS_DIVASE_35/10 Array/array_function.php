<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
</head>
<body>
	<h1>
	<?php
$season=array("Summer","Winter","Spring","Autumn");
foreach($season as $s)
{
echo "$s<br/>";
}
echo count($season).'<br>';
sort($season);
foreach($season as $s)
{
echo "$s<br/>";
}
?>
	</h1>
</body>
</html>
