<?php 
	include("../includes/connection.php");

	if($con === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
		 
	}
	
    	$user_id				=		$_POST['user_id'];
    	$service_id				=		$_POST['service_id'];
	$service_exchange_location		=		$_POST['service_exchange_location'];
	$service_start_time			=		$_POST['service_start_time'];
	$service_end_time			=		$_POST['service_end_time'];
	$price					=		$_POST['connection_price'];
	$request				=		$_POST['request'];

    $sql =  "UPDATE connectionary SET 		service_exchange_location	=	'".$service_exchange_location."',
						service_start_time		=	'".$service_start_time."',
						service_end_time		=	'".$service_end_time."',	
						price		=	'".$price."',	
						request				=	'".$request."'	WHERE
						user_id				=	'".$user_id."'  AND
						service_id			=	'".$service_id."'";

    if(mysqli_query($con,$sql)){
		echo "updated successfully!";

	}else{
		echo mysqli_error($con);
	}
	mysqli_close($con);

?>