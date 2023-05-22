<!DOCTYPE html>
<html>
<body>
<?php
  setcookie("num1","10",time()+(86400*30),"/");
  if(isset($_COOKIE["num1"]))
  {
	  echo "your value is ".$_COOKIE["num1"];
}
 else
 {
	 echo"no cookie available";
 }
  ?>
</body>
</html>