<?php
	
	include("../includes/connection.php");

	if ($con->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$service_id			=		$_POST['service_id'];
	$sql = "DELETE from service where id=".$service_id."";

	if (mysqli_query($con, $sql)){
		echo "Succcessful";
	}else{
		echo "Error: Deletion Error".
		mysqli_error($con);
	}
	 
	// Close connections
	mysqli_close($con);

?>