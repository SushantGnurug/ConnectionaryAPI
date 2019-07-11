<?php 
	include("../includes/connection.php");

	if($con === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
		 
	}
    	$id               = $_POST['id'];
	$name             = $_POST['name'];
	$location         = $_POST['location'];
	$support_number   = $_POST['support_number'];
	$city             = $_POST['city'];
	$country          = $_POST['country'];
	$description      = $_POST['description'];
	$open_time        = $_POST['open_time'];
	$end_time         = $_POST['end_time'];
	$support_number   = $_POST['support_number'];
	$price            = $_POST['price'];
	$available_spots  = $_POST['available_spots'];
	$minimum_interval = $_POST['minimum_interval'];
	$maximum_interval = $_POST['maximum_interval'];
	$price_per        = $_POST['price_per'];
	$image        		= $_POST['image'];
	$connection       		= $_POST['connection'];

	$filename = time();
	$file = preg_replace('/\s+/', '', $filename).".jpg";
	$data = base64_decode($image);
	file_put_contents("image/".$file,$data);
	$imagelocation = $connection."connectionaryapi/api/service/image/".$file."";

    $sql =  "UPDATE service SET 	name			=	'".$name."',
								location		=	'".$location."',
								support_number	=	'".$support_number."',
								country         =     '".$country."',
								city            =    '".$city."',
								description		=	  '".$description."',	
								open_time       =    '".$open_time."',
								end_time        =     '".$end_time."',
								support_number  =     '".$support_number."',
								price           =     '".$price."',
								available_spots =    '".$available_spots."',
								minimum_interval=   '".$minimum_interval."',
								maximum_interval=   '".$maximum_interval."',
								price_per       =    '".$price_per."',
								image       =    '".$imagelocation."'
							
							WHERE	id		=	'".$id."'";

    if(mysqli_query($con,$sql)){
		echo "success";

	}else{
		echo mysqli_error($con);
	}
	mysqli_close($con);

?>