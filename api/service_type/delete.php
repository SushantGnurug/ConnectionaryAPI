<?php
	
	include("../includes/connection.php");

	if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
	$service_type_id		=		$_GET['service_type_id'];
	$sql = "DELETE from service_type where service_type_id=".$service_type_id."";

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