<?php
	
	include("../includes/connection.php");
	
	$service_id				=		$_POST['service_id'];
	$user_id				=		$_POST['user_id'];
	$service_exchange_location		=		$_POST['service_exchange_location'];
	$service_start_time			=		$_POST['service_start_time'];
	$service_end_time			=		$_POST['service_end_time'];
	$service_provider_gps			=		$_POST['service_provider_gps'];
	$service_receiver_gps			=		$_POST['service_receiver_gps'];
	$price					=		$_POST['price'];
	$request				=		$_POST['request'];
	
	
	$sql =  "INSERT INTO  connectionary (service_id,user_id,service_exchange_location,service_start_time,
		service_end_time,service_provider_gps,service_receiver_gps,price,request) VALUES 
		(".$service_id.",".$user_id.",'".$service_exchange_location."','".$service_start_time."'
		,'".$service_end_time."',".$service_provider_gps.",".$service_receiver_gps."
		,price,request)";
	 
	// Confirm there are results
	if (mysqli_query($con, $sql))
	{
		echo "successful";
	}else{
		echo mysqli_error($con);
	}
	 
	// Close connections
	mysqli_close($con);

?>