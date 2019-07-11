<?php 
	include("../includes/connection.php");

	if($con === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());   
	}
	
    $service_type		=		$_GET['service_type'];
	
	// Select all of our stocks from table 'stock_tracker'
	$sql = "INSERT INTO service_type (service_type) VALUES ('".$service_type."')";
	 
	// Confirm there are results
	if (mysqli_query($con, $sql))
	{
		echo "successful";
	}else{
		echo "error:user is not inserted properly".
		mysqli_error($con);
	}
	 
	// Close connections
	mysqli_close($con);

?>