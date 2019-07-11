<?php 
	include("../includes/connection.php");

	if($con === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	   
	$user_id             	        = $_POST['user_id'];
	$name             	        = $_POST['name'];
	$location                  	= $_POST['location'];
	$support_number         	= $_POST['support_number'];
	$city                       	= $_POST['city'];
	$country                    	= $_POST['country'];
	$description      	        = $_POST['description'];
	$open_time                  	= $_POST['open_time'];
	$end_time                   	= $_POST['end_time'];
	$price                      	= $_POST['price'];
	$available_spots            	= $_POST['available_spots'];
	$minimum_interval           	= $_POST['minimum_interval'];
	$maximum_interval           	= $_POST['maximum_interval'];
	$price_per                  	= $_POST['price_per'];
	$service_image      		= $_POST['service_image'];
	$connection      		= $_POST['connection'];

	
	$filename = time();
	$file = preg_replace('/\s+/', '', $filename).".jpg";
	$data = base64_decode($service_image);
	file_put_contents("image/".$file,$data);
	$imagelocation = $connection."connectionaryapi/api/service/image/".$file."";
	$sql = "INSERT INTO service (user_id,name,location,support_number,city,country,description,open_time,
		end_time,price,available_spots,minimum_interval,maximum_interval,price_per,image) VALUES
		('".$user_id."','".$name."','".$location."','".$support_number."',
		'".$city."','".$country."','".$description."',
		'".$open_time."','".$end_time."','".$price."','".$available_spots."','".$minimum_interval."',
		'".$maximum_interval."','".$price_per."','".$imagelocation."')";

	if(mysqli_query($con,$sql)){
		echo "success";

	}else{
		//echo "failure";
		//echo "error:service is not inserted properly".
		echo mysqli_error($con);
	}
	mysqli_close($con);
	
	

?>