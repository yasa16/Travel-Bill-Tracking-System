<?php
	
session_start();	
	
	if(isset($_POST['submit'])){
		
		include 'config.php';
		
		//mysqli_real_escape_string - Make sure that people cannot input any malicious type inputs
		$uid = mysqli_real_escape_string($conn, $_POST['uid']);
		$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
		
		//Error Handlers
		//Check if inputs are empty
		if(empty($uid) || empty($pwd)){
			header("Location: ../index.html?login=empty");
			exit();
			
		}else{
			$sql = "SELECT * FROM registered_user WHERE userName='$uid' OR email='$uid'";
			$result = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);
			
			if($resultCheck < 1){
				header("Location: ../index.html?login=failed");
				exit();
			}else{
				//checking password
				if($row = mysqli_fetch_assoc($result)){
					//De-hashing the password
					$hashedPwdCheck = password_verify($pwd, $row['password']);
					if($hashedPwdCheck == false){
						header("Location: ../index.html?login=failed");
						exit();
					} elseif($hashedPwdCheck == true){
						//Log in the user here
						$_SESSION['u_id'] = $row['userId'];
						$_SESSION['u_first'] = $row['fname'];
						$_SESSION['u_last'] = $row['lname'];
						$_SESSION['u_email'] = $row['email'];
						$_SESSION['u_name'] = $row['userName'];
						$_SESSION['u_pwd'] = $row['password'];
						header("Location: ../profile.php?login=success");
						exit();
					}
				}
			}
		}
		
	}else{
		header("Location: ../index.html?login=failed");
		exit();
	}
	
?>