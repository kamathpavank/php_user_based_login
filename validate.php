<?php
// Start the session
session_start();
?>

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
		$test = $row['access'];
		$_SESSION["access"] = $test;

		// //Admin can access all pages
		// if($test == 123){
		// }

		//imac is common
		if($test == 1 || $test == 12 || $test == 13){
			header('Location: imac.php');
		}

		//ilab is common
		else if($test == 2 || $test == 23){
			header('Location: ilab.php');
		}

		//robotics is common
		else if($test == 3){
			header('Location: robotics.php');
		}
		else{
			header('Location: admin.php');

		}

		// echo "$test";
		// if(strcmp($test, "imac") == 0){
		// 	header('Location: mac.php');
		// }
		// elseif (strcmp($test, "ilab") == 0) {
		// 	header('Location: ilab.php');
		// }
		// elseif (strcmp($test, "robotics") == 0) {
		// 	header('Location: robotics.php');
		// }
	}

	else{
		echo "wrong wrong credentials  ";
		echo "$username,$password";
	}
}
?>
