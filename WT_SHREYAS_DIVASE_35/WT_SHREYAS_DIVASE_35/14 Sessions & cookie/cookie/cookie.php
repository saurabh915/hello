<?php
    
    //setcookie(cookie_name, cookie_value, [expiry_time], [cookie_path], [domain], [secure], [httponly]);

     setcookie("Name_Shreyas", "Value_Shreyas", time()+ 60,'/'); // expires after 60 seconds
     echo 'the cookie has been set for 60 seconds';
?>
