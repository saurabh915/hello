<html> 
<body> 
<?php
class Books {
/* Member variables */
var $price=10; //variable declaration in class defination
function display(){
echo "Price in class method: ". $this->price."<br/>"; 
}
}
/* Creating New object using "new" operator */
$b= new Books();
$b->display();
echo "Price outside class".$b->price;
?>
</body>
</html>