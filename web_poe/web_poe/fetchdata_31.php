<!DOCTYPE html>
<html>
<body>
<h1>Fetching Value From Database</h1>

<?php 

  //create connection
   $conn=new mysqli("localhost","root","","studentpoe");
   
   //get connection error
   if($conn->connect_error){
	   
	   echo"connection failed :";
	 }
	//sql querry
	$query = "SELECT * FROM `studentdata`" ;
	
	//fetching data from database
	
	$result=$conn->query($query);
	
	if($result->num_rows>0)
	{
		//output data from row
		while($row=$result->fetch_assoc())
		{
			 echo "Roll No: " .
                $row["roll"]. " - Name: " .
                $row["name"]. " | Subject: " . 
                $row["subject"]. " | City: " . 
                $row["city"]. "<br>";
			
		}
		
	}
	else
	{ 
      echo"0 results";
	}
	
	$conn->close();
	
?>
</body>
</html>