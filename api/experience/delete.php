<?php
	
	include("../includes/connection.php");

	if ($con->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$experience_id			=		$_POST['experience_id'];
	$sql = "DELETE from experience where experience_id=".$experience_id."";

	if (mysqli_query($con, $sql)){
		echo "Succcessful";
	}else{
		echo "Error: Deletion Error".
		mysqli_error($con);
	}
	 
	// Close connections
	mysqli_close($con);

?>