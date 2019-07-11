<?php
	
	include("../includes/connection.php");

	if ($con->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$user_id		=		$_GET['user_id'];
	$sql = "DELETE from user where user_id=".$user_id."";

	if (mysqli_query($con, $sql))
	{
		echo "Succcessful";
	}else{
		echo "Error: Deletion Error".
		mysqli_error($con);
	}
	 
	// Close connections
	mysqli_close($con);

?>