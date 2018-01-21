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

		//display first page as imac if access level contains 1
		if($test == 1 || $test == 12 || $test == 13){
			header('Location: imac.php');
		}

		//display first page as ilab if access level contains 2
		else if($test == 2 || $test == 23){
			header('Location: ilab.php');
		}

		//display first page as robotics if access level contains 3
		else if($test == 3){
			header('Location: robotics.php');
		}

		//Admin
		else{
			header('Location: admin.php');
		}
	}

	else{
		echo "wrong wrong credentials";
		echo "$username,$password";
	}
}
?>
