<?php
// Start the session
session_start();
?>

<?php
	require 'connection.php';
?>

<?php

	$username = $_POST["username"];
	$password = $_POST["password"];

	$sql = "SELECT * FROM `userbased` WHERE `username` = '$username' AND `password` = '$password'";
	$result = $conn->query($sql);
	
	//postgres code of querying data
	//$result = pg_query($conn, "SELECT * FROM `userbased` WHERE `username` = '$username' AND `password` = '$password'");


	if($result->num_rows > 0){
		
	//potgres sql command
	//if (pg_result_status($result) > 0) {
		
		$row = $result->fetch_assoc();
		
		//postgres code for fetch_assoc()
		//$row = pg_fetch_assoc($result);
		
		//access value in test
		$test = $row['access'];
		$_SESSION["access"] = $test;
		$_SESSION["username"]=$row['username'];
		//display first page as overview if access level contains 1
		if($test == 1){
			header('Location: overview.php');
		}

		//display first page as codestrike if access level contains 2
		else if($test == 2){
			header('Location: codestrike.php');
		}

		//Admin
		else{
			header('Location: overview.php');
		}
	}

	else{
		$_SESSION["credentials"] = "Invalid username and password";
		header('Location: index.php');
	}

	if ((pg_result_status($result)==2) && (pg_num_rows($result)==1) ) {
			$row = pg_fetch_assoc($result);
			$hash = $row['password'];

			//Verifying the password:
			if (password_verify($password,$hash)){ // <--Replace here
				// Seting Session variables:
				$_SESSION['userId']=$row['uniqueID'];
				$_SESSION['username']=$row['username'];
				//access value in test
				$_SESSION["access"] = $test;
				//display first page as overview if access level contains 1
			if($test == 1){
				header('Location: overview.php');
			}

			//display first page as codestrike if access level contains 2
			else if($test == 2){
				header('Location: codestrike.php');
			}

			//Admin
			else{
				header('Location: overview.php');
			}
	}
	else{
			// Redirecting after unsuccessful login:
			header("Location:login.php");
		}
		
?>
