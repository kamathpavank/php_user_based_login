<?php
$servername = "localhost";
$username = "root";
$password = "abcd@1234";
$dbname = "login";

// Create connection
$conn = new mysqli($servername, $username, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>