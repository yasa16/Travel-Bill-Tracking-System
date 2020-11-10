<?php
	include_once 'includes/config.php'; 
	session_start();
?>
<html>
<head> 
	<link rel="stylesheet" type="text/css" href="styles/editProfileStyle.css">
	<link rel="stylesheet" type="text/css" href="styles/eprofileStyle.css">
	<link rel="icon" type="image/png" href="images/logo.png">
	<script src="js/editProfileStyle.js">
	</script>
	<title>Edit Profile | Dream Wanderer
	</title>
	<script src="js/homescript.js">
	</script>
</head>
<body>

	<header class="header">
		
		<ul class="menu">
			<li class="menu"><a href="index.html">Home</a></li>
			<li class="menu"><a href="tripnw.html">Trips</a></li>
			<!--<li class="menu"><a href="login.html">Login</a></li>-->
			<li class="menu"><a href="aboutus.html">About Us</a></li>
			<li class="menu"><a href="help.html">Help</a></li>
		</ul>
		
		<a href="index.html"><img  class="headerlogo" src="images/logo3.png" width="418.8px" height="126.8px"></a>
		
	</header>
	
			<a href="profile.php" style="text-decoration:none;"><p  style="color:black; font-size:30px; font-family: calibri;">Back to Profile</p></a>
	
	
	<?php
		//fetching data from the table
		$id = $_SESSION['u_id'];
		$sql = "SELECT * FROM registered_user WHERE userId= '$id'";
		$result = $conn->query($sql);
		if($result->num_rows>0){
			//output each row
			while($row = $result->fetch_assoc()){
				$fname = $row["fname"];
				$lname = $row["lname"];
				$email = $row["email"];
				
				//de-hashing the password using function
				$cpswd = $row["password"];
				$dehash = password_verify($cpswd, $row['password']);
			}
		}
	?>
	
	
	<div class="mainForm">
		<center><p class="heading">Edit Profile</center>
		
		
		
		<div class="form">
			<form method="POST" action="includes/editConfig.php" onsubmit="return passwordMatch()">
				<p align="left" class="formElements">First Name:</p>
				<input type="text" name="namef" id="renamef" value=<?php echo $fname ?> pattern="[a-zA-Z0-9]{3,12}">
				
				<p align="left" class="formElements">Last Name:</p>
				<input type="text" name="namel" id="renamel"  value=<?php echo $lname ?> pattern="[a-zA-Z0-9]{3,12}">
				
				<p align="left" class="formElements">Email:</p>
				<input type="text" name="email" id="mail" value=<?php echo $email ?> pattern="[a-zA-Z0-9%_+-]+@[a-zA-Z]+\.[a-z]{2,3}">
				
				<p align="left" class="formElements">Current Password:</p>
				<input type="password" name="cpwd" id="pwd" value=<?php echo $dehash ?> required>
				
				<p align="left" class="formElements">New Password:</p>
				<input type="password" name="newpwd" id="npwd">
				
				<p align="left" class="formElements">Confirm New Password:</p>
				<input type="password" name="conpwd" id="confirm">
				
				<br><br>
				<input type="submit" value="Update Profile" id="smt">
			</form>
		</div>
		
			<div class="form">
			
				<?php
					//Retrieving profile image
					$id = $_SESSION['u_name'];
					$sql = "SELECT * FROM profileImg WHERE userid = '$id'"; 
					$resultImg = mysqli_query($conn, $sql);
					while($rowImg = mysqli_fetch_assoc($resultImg)){
						echo "<div class='userImage'>";
							if($rowImg['status'] == 0){
								$id = $_SESSION['u_name'];
								//Profile image saved as the "profile.userId.jpg"
								echo "<img style='width:40%;' class='right' src='uploads/profile".$id.".jpg?'".mt_rand().">";
							} else {
								echo "<img src='images/user.png' style='width:40%;' class='right'>";
							}
						echo "</div>";
					}
				?>
				
				<!--Form to upload new profile image-->
				<form action="includes/uploadConfig.php" method="POST" enctype="multipart/form-data">
					<p align="left" class="formElements">Upload your profile picture</p>
					<input type="file" name="file">
					<br><br><br>
					Make sure the uploaded file is JPG!
					<br><br>
					<input type="submit" name="submit" value="Upload Image">
				</form>
			</div>
	</div>
	
	<br>
	<br>
	
		<footer class="clearfix" style="padding:20px; background-color: #80ccff;">
		<div>
			<a href="index.html" class="footerNav">Home</a>
			<a href="tripnw.html" class="footerNav">Trips</a>
			<!--<a href="login.html" class="footerNav">Login</a>-->
			<a href="aboutus.html" class="footerNav">About Us</a>
			<a href="help.html" class="footerNav">Help</a>
		</div>	
		<hr width="100%">
		<table style="width: 80%; font-family:calibri;" align="center">
			<tr>
				<td>
					<p>DREAM WANDERER(Pvt)Ltd <br> No.1012 <br>Kaduwela.<br> Sri Lanka</p>
				</td>
				<td>
					<p>HotLine: +9411 2750505<br>Phone: +9411 2750284<br>E-mail: contact_us@dreamwanderer.com <br>  
				</td>
				<td>
					<p>Find Us On,</p>
					<div class="right">
						<a href="https://www.facebook.com/" target="blank"><img class="iconpadding" title="facebook" src="images/facebook.png" alt="Facebook" width="30px"></a>
						<a href="https://www.instagram.com/" target="blank"><img class="iconpadding" title="instagram" src="images/instagram.png" alt="Facebook" width="30px"></a>
						<a href="https://www.twitter.com/" target="blank"><img class="iconpadding" title="twitter" src="images/twitter.png" alt="Facebook" width="30px"></a>
					</div>
				</td>
			</tr>
		</table>		
		<hr width="100%">	
			<center><img class="footerlogo" src="images/logo3.png" width="220px"></center>
		<p class="footer">Copyright 2019 @ Dream Wanderer
			<br>All rights reserved
			<br>Website Developed and Designed by MLB_03.2_08
		</p>						
	</footer>
</body>
</html>