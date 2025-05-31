<?php
// Database configuration
$servername = "localhost";
$username = "root"; // Your DB username
$password = "";     // Your DB password
$dbname = "mydatabase"; // Your DB name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$description = $_POST['description'];

// Insert data into MySQL
$sql = "INSERT INTO contact_form (name, email, description) VALUES ('$name', '$email', '$description')";

if ($conn->query($sql) === TRUE) {
  echo "Data submitted successfully!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
