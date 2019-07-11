<?php 
include("../includes/connection.php");

	if($con === false){
		die("ERROR: Could not connect. " . mysqli_connect_error()); 
	}
    $service_type_id    	= 	$_GET['service_type_id'];
    $service_id             = 	$_GET['service_id'];     

    $sql =  "INSERT INTO  service_service_type (service_type_id,service_id) VALUES 
								(".$service_type_id.",".$service_id.")";

    if(mysqli_query($con,$sql)){
		echo "user inserted successfully!";

	}else{
		echo "error:user is not inserted properly".
		mysqli_error($con);
	}
	mysqli_close($con);

?>