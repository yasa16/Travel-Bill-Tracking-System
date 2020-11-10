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
<?php

$conn = mysqli_connect("localhost","root","");
$db = mysqli_select_db($conn,'tbts');

?>
<?php
 if(isset($_POST['id']))
{	 
	 
    $id = $_POST['id'];
    $name = $_POST['name'];
    $experiences = $_POST['experiences'] ;

    $sql = "INSERT into share values('id','$name','$experiences')";
    $qry = mysqli_query($conn,$sql);

    if(!$qry)
	
         echo mysqli_error($conn);
	  
	          else
			  
		          echo "Successfully Shared Your Experiences";
				  
			  
 }			   
?>	
		   
  		   
<?php

echo "<ul>";
$sql = "select * from share";
$qry = mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($qry))
	echo //<li>No : $row[0]</li>
          "<li>Name : $row[1]</li>
          <li>Experiences: $row[2]</li><br>";
         echo "<ul>";


?>
<style>
body{
 
 background-color: #ffb3ff;
 
}
</style>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

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

















