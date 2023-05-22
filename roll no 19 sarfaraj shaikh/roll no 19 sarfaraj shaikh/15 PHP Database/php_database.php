<!DOCTYPE html>
<html>
<head>
	<title>PHP Demo</title>
	<style>
		form {
			margin: 20px;
			padding: 20px;
			border: 1px solid #ccc;
			border-radius: 5px;
			background-color: #f7f7f7;
			box-shadow: 0px 0px 5px #ccc;
			align-items: center;
			text-align: center;
		}

		label {
			display: inline-block;
			margin-bottom: 10px;
			font-weight: bold;
		}

		input[type="text"] {
			padding: 5px;
			border-radius: 3px;
			border: 1px solid #ccc;
			margin-bottom: 10px;
			width: 500px;
		}

		input[type="submit"] {
			padding: 5px 10px;
			background-color: #428bca;
			color: #fff;
			border: none;
			border-radius: 3px;
			cursor: pointer;
		}

		h2 {
			margin-top: 20px;
			font-size: 18px;
			font-weight: bold;
		}
	</style>
</head>
<body>

	<form method="post" action="">
		<label>Name:</label>
		<input type="text" name="name"><br>
		<label>Email:</label>
		<input type="text" name="email"><br>
		<input type="submit" name="submit" value="Submit" style=" width:500px; margin-left: 50px; ">
	</form>

    <?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "wt_prac";

	$conn = new mysqli($servername, $username, $password, $dbname);

	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
		$name = $_POST["name"];
		$email = $_POST["email"];

		
		$sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
		if ($conn->query($sql) === TRUE) {
			echo "<br><br>";
			echo "<h2>Your Input:</h2>";
			echo "Name: " . $name . "<br>";
			echo "Email: " . $email . "<br>";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}

	$conn->close();
    ?>

</body>
</html>
