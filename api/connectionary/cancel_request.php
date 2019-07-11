<?php 
	include("../includes/connection.php");

	if($con === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
		 
	}
	
    	$user_id				=		$_POST['user_id'];
    	$service_id				=		$_POST['service_id'];
	$request				=		$_POST['request'];

    $sql =  "UPDATE connectionary SET 		request				=	'".$request."'	WHERE
						user_id				=	'".$user_id."'  AND
						service_id			=	'".$service_id."'";

    if(mysqli_query($con,$sql)){
		echo "updated successfully!";

	}else{
		echo mysqli_error($con);
	}
	mysqli_close($con);

?>