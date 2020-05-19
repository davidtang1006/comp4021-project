<!-- https://www.w3schools.com/php/php_mysql_prepared_statements.asp -->
<?php
$servername = "localhost";
$username = "user1846";
$password = "Rumi8zufez";
$dbname = "1846_db";

// Create connection.
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection.
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind.
$stmt = $conn->prepare("insert into Profile (input_2a) VALUES (?)");
$stmt->bind_param("s", $input_2a);

// Set parameters and execute.
$input_2a = $_POST["input-2a"];
$stmt->execute();

$stmt->close();
$conn->close();
?>