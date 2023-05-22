<!DOCTYPE html>
<html>
<head>
	<title>Sort Form</title>
</head>
<body>
	<form method="post">
		<label for="numbers">Enter 10 numbers (separated by commas):</label>
		<input type="text" name="numbers" id="numbers" required><br>
		<input type="submit" value="Sort">
	</form>

	<?php
		// Form was submitted
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			// explode to array
			$numbers_string = $_POST["numbers"];
			$numbers_array = explode(",", $numbers_string);

			// Remove any whitespace
			$numbers_array = array_map('trim', $numbers_array);

			
			sort($numbers_array);

			
			echo "<p>The sorted values are:</p>";
			echo "<ul>";
			foreach ($numbers_array as $number) 
			{
				echo "<li>$number</li>";
			}
			echo "</ul>";
		}
	?>
</body>
</html>

