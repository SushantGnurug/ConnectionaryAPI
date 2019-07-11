<?php 
include("../includes/connection.php");

	if($con === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
		 
	}
    $service_service_type_id               	= 	$_GET['service_service_type_id'];
    $service_type_id    					= 	$_GET['service_type_id'];
    $service_id             				= 	$_GET['service_id'];  

    $sql =  "UPDATE service_service_type SET 	service_type_id			=	".$service_type_id.",
												service_id				=	".$service_id."				WHERE
												service_service_type_id	=	".$service_service_type_id."";

    if(mysqli_query($con,$sql)){
	echo "user inserted successfully!";

	}else{
		echo "error:user is not updated properly".
		mysqli_error($con);
	}
mysqli_close($con);

?>