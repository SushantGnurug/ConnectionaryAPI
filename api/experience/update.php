<?php 
	include("../includes/connection.php");
	if($con === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
		 
	}
	$experience_id         = $_GET['experience_id'];
	$user_id               =$_GET['user_id'];
    $organization_name     =$_GET['organization_name'];
    $organization_location =$_GET['organization_location'];
    $job_title             =$_GET['job_title'];
    $description           =$_GET['description'];
    $start_date            =$_GET['start_date'];
    $job_level             =$_GET['job_level'];
    $end_date              =$_GET['end_date'];
    $currently_working       =$_GET['currently_working'];


    $sql = "UPDATE experience SET 
         experience_id ='".$experience_id."',user_id ='".$user_id."',organization_name = '".$organization_name."',organization_location='".$organization_location."', job_title='".$job_title."',description='".$description."',start_date='".$start_date."',job_level='".$job_level."',end_date='".$end_date."',currently_working ='".$currently_working."'

    WHERE experience_id ='".$experience_id."'";

    if(mysqli_query($con,$sql)){
		echo "experience updated successfully!";

	}else{
		echo "error:experience is not updated properly".
		mysqli_error($con);
	}
	mysqli_close($con);

?>


