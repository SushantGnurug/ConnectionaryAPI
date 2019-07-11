<?php
	
	include("../includes/connection.php");

	if ($con->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$connectionary_id		=		$_GET['connectionary_id'];
	$sql = "DELETE from connectionary where connectionary_id=".$connectionary_id."";

	if (mysqli_query($con, $sql))
	{
		echo "Succcessful";
	}else{
		echo "Error: Deletion Error".
		mysqli_error($con);
	}
	 
	// Close connections
	mysqli_close($con);

?>