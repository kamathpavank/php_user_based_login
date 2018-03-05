<?php
$servername = 'localhost';
$username = 'root';
$dbname = 'login';
$password = '';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//Postgres code
//$conn = pg_connect("host=localhost dbname=login user=root password=abcd@1234");


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// echo "Connected successfully";
?>
