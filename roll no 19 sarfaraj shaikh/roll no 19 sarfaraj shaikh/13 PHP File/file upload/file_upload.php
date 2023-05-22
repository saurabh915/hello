
<?php
$target = "C:/xampp/htdocs/WT Assignments/All Assignments/13 PHP File/file upload/files/"; //create a folder of name upload on d drive or any other folder name full path
if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target.$_FILES['fileToUpload']['name']))
{ 
echo "File uploaded successfully!"; 
} 
else
{ 
echo "Sorry, file not uploaded, please try again!"; 
} 
?> 
