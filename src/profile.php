<?php
	include_once 'includes/config.php'; 
	
	session_start();

?>
<html>
<head> 
	<link rel="stylesheet" type="text/css" href="styles/profileStyle.css">
	<link rel="icon" type="image/png" href="images/logo.png">
	<title>Profile | Dream Wanderer
	</title>
</head>
<body>
	<header class="header">
		
		
		<ul class="menu">
			<li class="menu"><a href="index.html">Home</a></li>
			<li class="menu"><a href="tripnw.html">Trips</a></li>
			<li class="menu"><a href="hotels.php">Hotels</a></li>
			<li class="menu"><a href="aboutus.html">About Us</a></li>
			<li class="menu"><a href="help.html">Help</a></li>
		</ul>
		
		<a href="index.html"><img  class="headerlogo" src="images/logo3.png" width="418.8px" height="126.8px"></a>
		
	</header>
	
	<p class="welcome">Welcome Back <?php
										if(isset($_SESSION['u_id'])){
											echo $_SESSION['u_name'];
										}		
										?>!</p>

<div class="mainDiv">
	<div class="ad">
		<a href="http://www.google.com"><image src="images/Ad.gif" style="height:500px;"></a>
	</div>
	
	<div class="newPost">
		<form action="includes/postConfig.php" method="POST">
		<textarea name="des" rows="20" cols="120" placeholder="Something new?"></textarea>
		<br>
		<br>
		<input type="text" name="location" placeholder="Location Here!">
		<br>
		<br>
		<input type="text" name="tCharges" placeholder="Travelling Charges">
		<br>
		<br>
		<input type="text" name="aCharges" placeholder="Accomodation Charges">
		<br>
		<br>
		<input type="submit" name="submit" value="Post">
		</form>
		
		<form action = "includes/manageConfig.php" method="POST">
			<center><button type="submit" name = "recents"><a href="editPost.php" style="text-decoration:none;"> Check recent Posts </a></button></center>
		</form>
	</div>
	
	<div class="user">
		<a href="editProfile.php" class="right edit">Edit Profile</a>
		<br><br>
		<?php
			if(isset($_SESSION['u_id'])){
				echo '<form action = "includes/logoutConfig.php" method="POST">
						<button class="right edit" name="submit" style="float:right">Log Out</button>
						</form>';
			} else {
				header("Location: login.php");
			}
		?>
	<br><br>
		<div class="userImage">
			<image style="width:50%;" class="right" src="images/user.png" >
		</div>
		<h2 class="right"><?php
							if(isset($_SESSION['u_id'])){
							echo $_SESSION['u_name'];
							}		
							?>
		</h2>
		

	</div>
</div>	

<br><br><br><br><br><br><br><br>
	<center><h1>Some Recent Trips</h1></center>

	<div class="posts">
		<div class="subposts">
			<image src="images/EllaCard.jpg" alt="post1" style="width:100%">
			<p class="topic"><a href="tripnw.html" style="text-decoration: none; color: white;">Ella</a></p>
			<p style="text-align:center;">See what`s new in Ella Sri Lanka. Checkout this post guys. I have just spent only 2500LKR!</p>
		</div>

		<div class="subposts">
			<image src="images/SinharajaCard.jpg" alt="post1" style="width:100%">
			<p class="topic"><a href="tripnw.html" style="text-decoration: none; color: white;">Sinharaja</a></p>
			<p style="text-align:center;">Unbelievable. Just for 2000LKR. Click this to see total cost.</p>
		</div>

		<div class="subposts">
			<image src="images/MirissaCard.jpg" alt="post1" style="width:100%">
			<p class="topic"><a href="tripnw.html" style="text-decoration: none; color: white;">Mirissa</a></p>
			<p style="text-align:center;">I had to spend little bit more. But this location is memorable.</p>
		</div>

	</div>
	
	<br><br>
<p class="dateTime">
<script>
	document.write(Date());
</script>
</p>
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