<?php 
	require 'connection.php';
?>

<?php

	

if (!isset($_POST["username"]) && !isse($_POST["password"])){
	echo "Enter username and password";
	header('Location: login.php');
}

else{
	$username = $_POST["username"];
	$password = $_POST["password"];

	$sql = "SELECT * FROM `userbased` WHERE `username` = '$username' AND `password` = '$password'";
	$result = $conn->query($sql);

	
	if($result){
		
		$row = $result->fetch_assoc();
		$test = $row['role'];
		// echo "$test";
		if(strcmp($test, "imac") == 0){
			header('Location: mac.php');
		}
		elseif (strcmp($test, "ilab") == 0) {
			header('Location: ilab.php');
		}
		elseif (strcmp($test, "robotics") == 0) {
			header('Location: robotics.php');
		}
	}

	else{
		echo "wrong wrong credentials  ";
		echo "$username,$password";
	}
}
?>
