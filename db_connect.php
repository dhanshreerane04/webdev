<?php
$servername = "localhost"; // Change if using a different host
$username = "root"; // Change to your MySQL username
$password = ""; // Change to your MySQL password
$dbname = "Website_DB"; // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else echo"connection done";
?>
