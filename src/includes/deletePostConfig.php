<?php

	include_once 'config.php';
	
	//getting the id of the particular record
	$id = $_GET['Id'];
	
	//Delete query
	$sql = "DELETE FROM userpost WHERE postId = $id";
	if(mysqli_query($conn, $sql) > 0){
		header("Location: ../editPost.php?delete=success");
	} else {
		echo "<script>Something went wrong!</script>";
	}
	
	//Closing the connection
	mysqli_close($conn);

?>