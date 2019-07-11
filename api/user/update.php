<?php 
	include("../includes/connection.php");

	if($con === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
		 
	}
     $user_id               = 	$_GET['user_id'];
     $username              = 	$_GET['username'];     
     $user_firstname        =	$_GET['user_firstname'];
     $user_middlename       = 	$_GET['user_middlename'];
     $user_lastname         = 	$_GET['user_lastname'];
     $user_dob              =	$_GET['user_dob'];
     $user_gender           =	$_GET['user_gender'];
     $user_email            =	$_GET['user_email'];
     $user_primary_phone    = 	$_GET['user_primary_phone'];
     $user_secondary_phone  = 	$_GET['user_secondary_phone'];
     $user_password         = 	$_GET['user_password'];
     $user_address          =	$_GET['user_address'];

    $sql =  "UPDATE user SET 	username				=	'".$username."',
								user_firstname			=	'".$user_firstname."',
								user_middlename			=	'".$user_middlename."',
								user_lastname			=	'".$user_lastname."',
								user_dob				=	'".$user_dob."',
								user_gender				=	'".$user_gender."',
								user_email				=	'".$user_email."',
								user_primary_phone		=	'".$user_primary_phone."',
								user_secondary_phone	=	'".$user_secondary_phone."',
								user_password			=	'".$user_password."',
								user_address			=	'".$user_address."' 					WHERE
								user_id					=	".$user_id."";

    if(mysqli_query($con,$sql)){
		echo "user inserted successfully!";

	}else{
		echo "error:user is not updated properly".
		mysqli_error($con);
	}
	mysqli_close($con);

?>