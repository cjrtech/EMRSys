<?php
// Retrieve form data
$medication = $_POST['medication'];
$dosage = $_POST['dosage'];
$frequency = $_POST['frequency'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];

// Connect to the database
$host = 'localhost';  // Replace with your database host
$username = 'root';   // Replace with your database username
$password = '';       // Replace with your database password
$dbName = 'my_webapp_db';  // Replace with your database name

$conn = new mysqli($host, $username, $password, $dbName);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Insert data into the table
$sql = "INSERT INTO prescriptions (medication, dosage, frequency, start_date, end_date) 
        VALUES ('$medication', '$dosage', '$frequency', '$start_date', '$end_date')";

if ($conn->query($sql) === TRUE) {
  // Redirect to the home page
  header("Location: EMR_Frontend.php");
  exit();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>