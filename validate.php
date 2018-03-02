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

	$sql = "SELECT * FROM `auth` WHERE `username` = '$username' AND `password` = '$password'";
	$result = $conn->query($sql);
	
	$sql2  = "SELECT * FROM `access` WHERE `username` = '$username'";
	$result2 =  $conn->query($sql2);
	

	if($result->num_rows > 0){

		$access_levels = array();
		$row = $result->fetch_assoc();
		$_SESSION["username"]=$row['username'];
	
		//extract all access level of user in array

		while($row2 = $result2->fetch_assoc()){
			array_push($access_levels,$row2['access_level']);		
		}

		if(in_array(3,$access_levels)){
			header('Location:robotics.php');
		}

		if(in_array(1,$access_levels)){
			header('Location:imac.php');
		}

		if(in_array(2,$access_levels)){
			header('Location:ilab.php');
		}
		
	}

	else{
		$_SESSION["credentials"] = "Invalid username and password";
		header('Location: login.php');
	}
?>
