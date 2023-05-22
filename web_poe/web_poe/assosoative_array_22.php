//Write a program for associative array using PHP
//PHP allows you to associate name/label with each array elements in PHP using => symbol. Such way, you can easily remember the element because each element is represented by label than an incremented number.

<?php    
$salary=array("Sonoo"=>"550000","Vimal"=>"250000","Ratan"=>"200000");  

$salary["Sonoo"]="550000";  
$salary["Vimal"]="250000";  
$salary["Ratan"]="200000";  

echo " <br/>";
echo "Sonoo salary: ".$salary["Sonoo"]."<br/>";  
echo "Vimal salary: ".$salary["Vimal"]."<br/>";  
echo "Ratan salary: ".$salary["Ratan"]."<br/>";  
echo"<br/>second way to declare associative array"."<br/>";

echo "sonoo salary".$salary["Sonoo"]."<br/>";
echo "vimal salary".$salary["Vimal"]."<br/>";
echo "Ratan salary".$salary["Ratan"]."<br/>";
?>    