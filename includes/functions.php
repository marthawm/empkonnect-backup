<?php

	function redirectto($newlocation){
		header("Location: ". $newlocation);
		exit;

	}
function find_employer_by_username($username){
	$query = "SELECT * ";

}
function email_exists($email, $con){
	$result = mysqli_query($con,"SELECT id from employer_register WHERE email = '$email'");
	if(mysqli_num_rows($result) == 1){
		return true;
	}else{
		return false;
	}
}
function logged_in(){
	if(isset($_SESSION['email'])){
		return true;
	}else{
		return false;
	}
}
?>