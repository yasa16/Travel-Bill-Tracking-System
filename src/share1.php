<!DOCTYPE html>
<html>
<head> 
 <link rel="icon" type="image/png" href="images/logo.png">
 <title>Search Hotels</title>
 <link rel="stylesheet" type="text/css"  href="styles/HotelStyles.css">
 <link rel="stylesheet" type="text/css"  href="styles/loginStyles.css">
<body>
<header class="header">
		<a href="signin.html"><img class="addUser" src="images/add.png" width="50px" alt="Add User"></a>
		<ul class="menu">
			<li class="menu"><a href="index.html">Home</a></li>
			<li class="menu"><a href="tripnw.html">Trips</a></li>
			<li class="menu"><a href="login.html">Login</a></li>
			<li class="menu"><a href="aboutus.html">About Us</a></li>
			<li class="menu"><a href="help.html">Help</a></li>
			<li class="menu"><a href="hotels.php">Hotels</a></li>
		
		</ul>
		
		<a href="index.html"><img  class="headerlogo" src="images/logo3.png" width="418.8px" height="126.8px"></a>
		</header>
	
	<br><br><br>


<center>
<form action = "share.php" method="post">
<p>User ID</p>
<input type="text"  name="id">
<p>Name</p> 
<input type="text"  name="name">
<p>Your Experiences / Recommendations</p>
<input type="text area"  id="rec" name="experiences" ><br>
<input type="submit" id="sb" value="submit">
</center>
</form>



<style>
input{
	
	
	width: 40%;
	height: 5%;
	border: 1px;
	border-radius: 05px;
	padding: 8px 15px 8px 15px;
	margin: 10px 0px 15px 0px;
	box-shadow: 1px 1px 2px 1px black;
	
	
}
#rec{
	
	height: 50px;
	
}

#sb{
	
	
	width:150px;
	background:  #7D0552  ;
	color: white;
	border-radius:5px;
	padding:10px;


	
	
	
}
body{
	
	
    background-color:  #FFDFDD;
	
}
</style>
<br><br><br><br><br>

<footer class="clearfix" style="padding:20px; background-color: #80ccff;">
		<div>
			<a href="index.html" class="footerNav">Home</a>
			<a href="tripnw.html" class="footerNav">Trips</a>
			<a href="#" class="footerNav">Login</a>
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





















