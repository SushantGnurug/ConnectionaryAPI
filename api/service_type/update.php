<?php 
include("../includes/connection.php");

if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
     
}
     $service_type_id               = 	$_GET['a'];
     $service_type              	= 	$_GET['b'];

    $sql =  "UPDATE service_type SET 	service_type				=	'".$service_type."'	WHERE
										service_type_id				=	".$service_type_id."";

    if(mysqli_query($con,$sql)){
	echo "user inserted successfully!";

	}else{
		echo "error:user is not updated properly".
		mysqli_error($con);
	}
mysqli_close($con);

?>