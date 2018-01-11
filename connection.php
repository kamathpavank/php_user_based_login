<?php
$servername = 'localhost';
$username = 'root';
$dbname = 'login';
$password = 'abcd@1234';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// echo "Connected successfully";
?>