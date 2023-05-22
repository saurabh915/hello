<?php    
$season=array("summer","winter","spring","autumn","rainyy");    
echo "Season are: $season[0], $season[1], $season[2] and $season[3]"; 
 //function 1  array_chunk using we can divide array in multiple part
 echo"<br>";
 print_r(array_chunk($season,1));

echo"<br>";
//function2 count()
echo"<br>";
echo"<br>";
echo"count element</br>";
  print_r(count($season));

//function4 reverse()
echo"<br>";
echo"<br>";
echo"Reverse element</br>";

  $reverse=array_reverse($season);
  foreach($reverse as $s)
  {
	  echo"$s<br/>";
	  
  }
  
echo"<br>";
echo"<br>";
echo"sort element</br>";
//function3 sort()
  sort($season);
  foreach($season as $s)
  {
	  echo"$s<br/>";
	  
  }



?> 

 

