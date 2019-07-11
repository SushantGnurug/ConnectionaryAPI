<?php 
	include("../includes/connection.php");

	if($con === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	   
	   $user_id                   	= $_POST['user_id'];
	   $permanent_district        	= $_POST['permanent_district'];
	   $permanent_municipality_vdc	=$_POST['permanent_municipality'];
	   $permanent_ward_no         	=$_POST['permanent_ward_no'];
	   $permanent_street          	=$_POST['permanent_street_name'];
	   $permanent_house_no        	=$_POST['permanent_house_no'];
	   $permanent_landline_no     	=$_POST['permanent_landline_no'];
	   $permanent_mobile_no       	=$_POST['permanent_mobile_number'];
	   $temporary_district        	=$_POST['temporary_district'];
	   $temporary_municipality_vdc	=$_POST['temporary_municipality'];
	   $temporary_ward_no         	=$_POST['temporary_ward_no'];
	   $temporary_street          	=$_POST['temporary_street_name'];
	   $temporary_house_no        	=$_POST['temporary_house_number'];
	   $temporary_landline_no     	=$_POST['temporary_landline_number'];
	   $temporary_mobile_no       	=$_POST['temporary_mobile_number'];
	   $citizenship_no            	=$_POST['citizenship_number'];
	   $citizenship_issued_district =$_POST['ctzn_issued_district'];
	   $citizenship_issued_date    	=$_POST['ctzn_issued_date'];
       	$grandfather_name           	=$_POST['grand_father_name'];
       	$father_name                	=$_POST['father_name'];
       $mother_name                	=$_POST['mother_name'];
       $spouse_name                	=$_POST['spouse_name'];
       $identification_image       	=$_POST['identification_image'];
	$connection			=$_POST['connection'];


       $filename = time();
	$file = preg_replace('/\s+/', '', $filename).".jpg";
	$data = base64_decode($identification_image);
	file_put_contents("image/".$file,$data);
	$imagelocation = $connection."connectionaryapi/api/kyc/image/".$file."";



       $sql = "INSERT INTO kyc (user_id,permanent_district,permanent_municipality_vdc,permanent_ward_no,
				permanent_street,permanent_house_no,permanent_landline_no,permanent_mobile_no,
				temporary_district,temporary_municipality_vdc,temporary_ward_no,temporary_street,
				temporary_house_no,temporary_landline_no,temporary_mobile_no,
				citizenship_no,citizenship_issued_district,citizenship_issued_date,
				grandfather_name,father_name,mother_name,spouse_name,identification_image) VALUES 
				('".$user_id."','".$permanent_district."','".$permanent_municipality_vdc."',
				'".$permanent_ward_no."','".$permanent_street."','".$permanent_house_no."',
				'".$permanent_landline_no."','".$permanent_mobile_no."','".$temporary_district."',
				'".$temporary_municipality_vdc."','".$temporary_ward_no."','".$temporary_street."',
				'".$temporary_house_no."','".$temporary_landline_no."','".$temporary_mobile_no."',
				'".$citizenship_no."','".$citizenship_issued_district."','".$citizenship_issued_date."',
				'".$grandfather_name."','".$father_name."','".$mother_name."','".$spouse_name."',
				'".$imagelocation."')";

       if(mysqli_query($con,$sql)){
		echo "kycform inserted successfully";

	}else{
		 echo mysqli_error($con);
	}
	mysqli_close($con);
	
	

?>   