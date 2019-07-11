<?php
	include("../includes/connection.php");
	$email		=	$_POST["email"];
	$password	=	$_POST["password"];
	
	$sql = "SELECT * from user where email='".$email."' AND password='".$password."'";
	$data = mysqli_query($con,$sql);
	if ($result = mysqli_query($con, $sql))
	{
		while($row = $result->fetch_object())
		{
			echo json_encode($row);
		}
	}else{
		echo "0";
	}

?>