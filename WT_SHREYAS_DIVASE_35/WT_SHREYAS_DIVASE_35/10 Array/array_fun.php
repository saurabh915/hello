<?php    
 
    $season=array("Summer","Winter","Spring","Autumn"); 
    $num=array(1,2,3,5,6,87,4,3,2,9,5);
       
    echo ("<b>print_r: </b>");
    print_r(array_change_key_case($season,CASE_UPPER));  
    echo ("<br>"); 
    echo ("<br>");
    
    echo ("<b>echo (season): </b>");
    echo ($season); 
    echo ("<br>"); 
    echo ("<br>");
    
    echo ("<b>echo count(season): </b>");
    echo count($season);
    echo ("<br>"); 
    echo ("<br>");
    
    echo ("<b>sort(num): </b>");
    sort($num);
    print_r($num);  
    echo ("<br>"); 
    echo ("<br>");
    
    echo ("<b>array_unique(num): </b>");
    $unique=array_unique($num);
    print_r($unique); 
    echo ("<br>"); 
    echo ("<br>");
    
    echo ("<b>array_merge(season,num): </b>");
    print_r(array_merge($season,$num));
    echo ("<br>");
    echo ("<br>");
    
    echo ("<b>array_slice(season,2): </b>");
    print_r(array_slice($season,2));
    echo ("<br>");
    echo ("<br>");
    
    echo ("<b>array_splice(season,2,2,num): </b>");
    array_splice($season,2,2,$num);
    print_r($season);
    
?>    
