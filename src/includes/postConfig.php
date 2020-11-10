<?php

session_start();

if(isset($_POST['submit'])){
	
		include_once 'config.php';
		
		//Fetching data from the form
		$description = mysqli_real_escape_string($conn, $_POST['des']);
		$location = mysqli_real_escape_string($conn, $_POST['location']);
		$tCharge = mysqli_real_escape_string($conn, $_POST['tCharges']);
		$aCharge = mysqli_real_escape_string($conn, $_POST['aCharges']);
		$id = $_SESSION['u_id'];
		
		//Insert query
		$sql = "INSERT INTO userpost (description, location, travellingCharges, accomodationCharges, userId) VALUES ('$description', '$location', '$tCharge', '$aCharge', '$id') ";
		mysqli_query($conn, $sql);
		header("Location: ../profile.php?posted");
		
} else {
	header("Location: ../profile.php?post=failed");
}


?>