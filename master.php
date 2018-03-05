<?php 
require "validate.php";
session_start();
?>

<?php 
function access_imac(){
	if(in_array(1,$access_levels)){
		return 1;
	}
	else{
		return 0;
	}
}

function access_ilab(){
	if(in_array(2,$access_levels)){
		return 1;
	}
	else{
		return 0;
	}

}

function access_robotics(){
	if(in_array(3,$access_levels)){
		return 1;
	}
	else{
		return 0;
	}
}

?>