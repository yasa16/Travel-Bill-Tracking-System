<?php
	include 'config.php';
	
	session_start();
	
	//Capturing user inputs
	$first = mysqli_real_escape_string($conn, $_POST["namef"]);
	$last = mysqli_real_escape_string($conn, $_POST["namel"]);
	$mail = mysqli_real_escape_string($conn, $_POST["email"]);
	$pwd = mysqli_real_escape_string($conn, $_POST["newpwd"]);
	
	$id=$_SESSION['u_id'];
		
	if(empty($pwd)){
		$hashed = $_SESSION['u_pwd'];
	}else{
		//hashing the password
		$hashed = password_hash($pwd, PASSWORD_DEFAULT);
	}
	
	
	
	
	//update query
	$sql = "UPDATE registered_user SET fname='$first', lname='$last', email='$mail', password='$hashed' WHERE userId= '$id'";
	if(mysqli_query($conn, $sql)){
		header("Location: ../profile.php?update=successs");
	}
	//close connection
	mysqli_close($conn);
?>