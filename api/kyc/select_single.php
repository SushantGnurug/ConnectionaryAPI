<?php
	
	include("../includes/connection.php");
	$user_id	=	$_GET['user_id'];	
	// Select all of our stocks from table 'stock_tracker'
	$sql = "SELECT * FROM kyc where user_id=".$user_id."";
	 
	// Confirm there are results
	if ($result = mysqli_query($con, $sql))
	{
		// We have results, create an array to hold the results
		// and an array to hold the data
		$resultArray = array();
		$tempArray = array();
		 
		// Loop through each result
		while($row = $result->fetch_object())
		{
		// Add each result into the results array
			echo json_encode($row);
		}
		 
		// Encode the array to JSON and output the results
	}else{
		echo "Add KYC form first";
	}
	 
	// Close connections
	mysqli_close($con);

?>