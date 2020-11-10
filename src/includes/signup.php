<?php

	if (isset($_POST['submit'])){
		
		include_once 'config.php';
		
		//mysqli_real_escape_string filters the inputs made by the user
		$first = mysqli_real_escape_string($conn, $_POST['fname']);
		$last = mysqli_real_escape_string($conn, $_POST['lname']);
		$uid = mysqli_real_escape_string($conn, $_POST['uname']);
		$mail = mysqli_real_escape_string($conn, $_POST['email']);
		$pwd = mysqli_real_escape_string($conn, $_POST['pass']);
		
		
			//Check the availability of the user name
			$sql = "SELECT * FROM registered_user WHERE userName='$uid'";
			$result = mysqli_query($conn, $sql);
			//checking the rows
			$resultCheck = mysqli_num_rows($result);
	
			//giving error to the user regarding user name
		
			if($resultCheck > 0){
				//Directing user back to the signin page
				header("Location: ../signin.php?signin=usertaken");
				exit();
			} else{
				//if user is available
				//hashing the password(taking to the db as unrecognizable)
				$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
				//Insert the user into the database
				$sql = "INSERT INTO registered_user (fname, lname, userName, email, 
				password) VALUES ('$first', '$last', '$uid', '$mail', '$hashedPwd');";
				mysqli_query($conn, $sql);
				
				//Assigning the row of iamge table to the new user 
				$sqlI = "SELECT * FROM registered_user WHERE userName = '$uid'";
				$result = mysqli_query($conn, $sqlI);
				
				if(mysqli_num_rows($result) >0){
					while($row = mysqli_fetch_assoc($result)){
						//insert query
						$sql = "INSERT INTO profileImg (userId, status) VALUES ('$uid', 1)";
						mysqli_query($conn, $sql);
					}
				}
				
				header("Location: ../login.php?signin=usersuccess");
				exit();
			
			}
		
		}
		else{
		header("Location: ../signin.php");
		exit();
	}
	
?>
