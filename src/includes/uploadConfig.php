<?php

session_start();
include_once 'config.php';

$id = $_SESSION['u_name'];

	if(isset($_POST['submit'])){
	
		
		$file = $_FILES['file'];
		
		//Fetching file data using $_FILE superglobal
		//File name
		$fileName = $file['name'];
		//Temporary Location of the file
		$fileTmpName = $file['tmp_name'];
		//Size of the file
		$fileSize = $file['size'];
		//Taking Errors
		$fileError = $file['error'];
		//File Type
		$fileType = $file['type'];
		
		//Take apart from punctuation(.) and getting the extension
		$fileExt = explode('.', $fileName);
		
		//Taking name to the lowercase
		//end() guessing the last piece of data from an array
		$fileActualExt = strtolower(end($fileExt));
		 
		//Extetions that are allowed inside the site
		$allowed = array('jpg','jpeg','png');
		
		//Checking ext. using $allowed array
		if(in_array($fileActualExt, $allowed)){
			//checking for errors
			if($fileError === 0){
				//file size checking
				if($fileSize < 1000000){
					$id = $_SESSION['u_name'];
					//setting new name to the file for identification
					$fileNameNew = "profile".$id.".".$fileActualExt;
					
					//Moving file to a seperate directory
					$fileDestination = '../uploads/'.$fileNameNew;
					//Temp Directory -> new Directory
					move_uploaded_file($fileTmpName, $fileDestination);
					
					//update query to the image table
					$sql = "UPDATE profileImg SET status = 0 WHERE userid= '$id';";
					//executing the query
					mysqli_query($conn, $sql);
					header("Location: ../editProfile.php?uploadsuccess");
				} else {
					echo "Invalid Size!";
				}
			} else {
				echo "There was an error uploading the image!";
			}
		} else {
			echo "Invalid Type!";
		}
	
	}

?>