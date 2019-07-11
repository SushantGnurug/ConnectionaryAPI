<?php 
	include("../includes/connection.php");

	if($con === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	   
    //$experience_id =$_GET['experience_id'];
    $user_id               =$_POST['user_id'];
    $organization_name     =$_POST['organization_name'];
    $organization_location =$_POST['organization_location'];
    $job_title             =$_POST['job_title'];
    $description           =$_POST['description'];
    $start_date            =$_POST['start_date'];
    $job_level             =$_POST['job_level'];
    $end_date              =$_POST['end_date'];
    $currently_working       =$_POST['currently_working'];


    $filename = time();

    $sql = "INSERT INTO experience (user_id,organization_name,organization_location,job_title,description,
				start_date,job_level,end_date,currently_working) VALUES 
				('".$user_id."','".$organization_name."','".$organization_location."',
				'".$job_title."','".$description."','".$start_date."','".$job_level."',
				'".$end_date."','".$currently_working."')";


    if(mysqli_query($con,$sql)){
		echo "experience inserted successfully";

	}else{
		echo "error:experience is not inserted properly".
		mysqli_error($con);
	}
	mysqli_close($con);
	
	

?>
