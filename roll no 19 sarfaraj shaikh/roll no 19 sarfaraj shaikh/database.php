<?php

$database_server = 'localhost';
$database_username = 'root';
$database_password = '';


$conn = mysqli_connect($database_server, $database_username, $database_password);


if (!$conn ) {
  die("Failed to connect to MySQL: " . mysqli_connect_error());
}
$sql = "CREATE DATABASE test_db";
$status = $conn->query($sql);

if ($status) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();
?>