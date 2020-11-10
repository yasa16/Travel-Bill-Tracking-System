<?php

include_once 'config.php'; 

	if(isset($_POST['submit'])){
		//Retrieving data from the update form
		$description = $_POST['des'];
		$loc = $_POST['location'];
		$tchar = $_POST['tCharges'];
		$achar = $_POST['aCharges'];
		$id = $_POST['postId'];
		
		//Update query 
		$sql = "UPDATE userpost SET location = '$loc', description = '$description', travellingCharges = '$tchar', accomodationCharges = '$achar'
		WHERE postId = '$id'";
		
		//Executing the query
		if(mysqli_query($conn, $sql)){
			header("Location: ../editPost.php?edited=success");
		} else {
			echo "<script> alert('Something went wrong!')</script>";
		}
		//closing the connection
		mysqli_close($conn);
	} else {
		echo "<script> alert('Something went wrong!')</script>";
	}

?>