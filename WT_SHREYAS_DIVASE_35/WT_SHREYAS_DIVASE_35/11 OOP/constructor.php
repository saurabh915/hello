<html> 
<body> 

<?php
class demo
{
var $name="vishal";
// Constructor is being implemented.
function __construct($name)
{
$this->name = $name;
}
}
// now constructor is called automatically
// because we have initialized the object
// or class Bird.
$obj = new demo("Sarfaraj");
echo $obj->name;
?>
</body>
</html>