<?php
	include("../includes/connection.php");
	$username = $_SERVER["PHP_AUTH_USER"];
	$password = $_SERVER["PHP_AUTH_PW"];
	//$username = 'username';
	//$password = 'password';
	$sql = "SELECT * from user where username='".$username."' AND user_password='".$password."'";
	$data = mysqli_query($con,$sql);
	if(mysqli_num_rows($data)!=0){
		echo "true";
	}else{
		echo "false";
	}
?>