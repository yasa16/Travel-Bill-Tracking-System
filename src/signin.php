<?php
	include_once 'includes/config.php';
?>
<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="image/png" href="images/logo.png">
<title>Sign In | Dream Wanderer</title>
    
      <link rel="stylesheet" type="text/css"  href="styles/signStyle.css">
	  <script src="js/myscript2.js"></script>

</head>
       <body>

<header class="header">
		<a href="signin.html"><img class="addUser" src="images/add.png" width="50px" alt="Add User"></a>
		<ul class="menu">
			<li class="menu"><a href="index.html">Home</a></li>
			<li class="menu"><a href="tripnw.html">Trips</a></li>
			<li class="menu"><a href="login.html">Login</a></li>
			<li class="menu"><a href="aboutus.html">About Us</a></li>
			<li class="menu"><a href="help.html">Help</a></li>
		</ul>
		
		<a href="index.html"><img  class="headerlogo" src="images/logo3.png" width="418.8px" height="126.8px"></a>
		
	</header>
	
	<br><br><br>
	
<div class="image1">
<br><br><br>
            <center>
            <div class="register">
			
			<form method="POST"  id="register" action="includes/signup.php" >
			
			    <h2> REGISTER HERE</h2>
				<p class="item" align=left>First Name</p>
				<input type="text" name="fname" id="name" placeholder="First Name" required>
				
				<p class="item" align=left>Last Name</p>
				<input type="text" name="lname" id="name" placeholder="Last Name" required>
				
				<p class="item" align=left>User Name</p>
				<input type="text" name="uname" id="name" placeholder="User Name" required>
				
				<p class="item" align=left>Email</p>
				<input type="email" name="email" id="name" placeholder="Email" required>
				
				<p class="item" align=left>Password</p>
				<input type="password" name="pass" id="pwd" placeholder="Password" required>
				
				<!--<p class="item" align=left>Confirm Password</p>
				<input type="password" name="pass"	id="pwd2" placeholder=" Re- enter Password" required>-->
				<br><br>
				
				<input type="checkbox" id="cb" placeholder="privacy" onclick = "checking()"  > <a href="termsandconditions.html"> Accept privacy policy and terms </a> 
				<br>
				<br>
		        <input type="submit" id="sub" name="submit" value="SIGN IN" disabled><br/></br>
				
			</form>
            </div>
			</center>
	
</div>
<br><br><br>
	<footer class="clearfix" style="padding:20px; background-color: #80ccff;">
		<div>
			<a href="index.html" class="footerNav">Home</a>
			<a href="tripnw.html" class="footerNav">Trips</a>
			<a href="login.html" class="footerNav">Login</a>
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











			
