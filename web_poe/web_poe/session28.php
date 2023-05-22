<!DOCTYPE html>
<html>
<body>
<h1>store and retrive</h1>

<?php
 session_start();
 //to gey your session id
 
 echo "your session id is ".session_id(); 
 
 //storing session data
 $_SESSION["firstname"]="peter";
 $_SESSION["lastname"]="parker";
  
  
  
//accessing session data 

 echo 'Hi, ' . $_SESSION["firstname"] . ' ' . $_SESSION["lastname"];
 ?>
</body>
</html>