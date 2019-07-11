<?php 
	include("../includes/connection.php");

	if($con === false){
		die("ERROR: Could not connect. " . mysqli_connect_error()); 
	}
    $username              	= 	$_POST['username'];
    $user_gender           	=	$_POST['gender'];
    $user_email            	=	$_POST['email'];
    $phone		    	= 	$_POST['phone_number'];
    $user_password         	= 	$_POST['password'];
    $user_fullname         	= 	$_POST['fullname'];
    $created_at         	= 	$_POST['created_at'];
    $updated_at         	= 	$_POST['updated_at'];

    $sql =  "INSERT INTO  user (username,gender,email,phone,password,fullname,created_at,updated_at) VALUES 
			('".$username."','".$user_gender."','".$user_email."','".$phone."'
				,'".$user_password."','".$user_fullname."','".$created_at."','".$updated_at."')";

    if(mysqli_query($con,$sql)){
		echo "success";

	}else{
		echo mysqli_error($con);
	}
	mysqli_close($con);

?>