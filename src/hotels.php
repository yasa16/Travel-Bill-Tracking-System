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
			<li class="menu"><a href="#">Hotels</a></li>
		  
		
		</ul>
		
		<a href="index.html"><img  class="headerlogo" src="images/logo3.png" width="418.8px" height="126.8px"></a>
		</header>
	
	<br><br><br>
	
  <div class="img"> 
  <br>
 
<style>

</style>
   
   <center>
      <h1>Find Your Ideal Hotel ....</h2>
	     <form action ="" method="POST"  >
		      <input type = "text"  name="id"  placeholder="Enter Location Number to search hotel"><br>
			  <input type= "submit" id="sub" name = "search" value = "SEARCH"><br><br>
			   <a class = "ex" href="share1.php" > Been to Sri Lanka? Click here to Share Your Experiences!</a>
			    <a class = "ex" href="share.php" > Check Reviews</a>
			  
		 </form>
		 
	<br><br>

   <div class="img">
  
    
	<image src="images/dhoni1.jpg" style="width:500px; height:600px;">

	
 	
<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'tbts');

if(isset($_POST['search']))
{
	
	$id = $_POST['id'];
	
	$query = "SELECT * FROM hotel where id = '$id' ";
	$query_run = mysqli_query($connection ,$query);
	
	
	while($row = mysqli_fetch_array($query_run))
	{
		
		    ?>
			
		    <form action="" method="POST">
			       <input type="hidden" name="id"               value="<?php echo $row['id']?>"/><br>
				   <input type="text"   name="Location"         value="<?php echo $row['Location']?>"/><br>
				   <input type="text"   name="Name"             value="<?php echo $row['Name']?> "/><br>
				   <input type="text"   name="Number"           value="<?php echo $row['Number']?>"/><br>
			       <input type="text"   name="email"            value="<?php echo $row['email']?>"/><br>
				   <input type="text"   name="address"          value="<?php echo $row['address']?>"/><br>
				   <input type="text"   name="description"      value="<?php echo $row['description']?>"/><br>
			
				   
				    <br><br><br><br>   
				   
				   <input type="text"   name="name2"             value="<?php echo $row['name2']?> "/><br>
				   <input type="text"   name="number2"           value="<?php echo $row['number2']?>"/><br>
			       <input type="text"   name="email2"            value="<?php echo $row['email2']?>"/><br>
				   <input type="text"   name="address2"          value="<?php echo $row['address2']?>"/><br>
				   <input type="text"   name="description2"      value="<?php echo $row['description2']?>"/><br>
				   
				   
				   
				   
				   
				   
			</form>	
		    <?php
	
	
	}
	
	
	
}
?>
	
	
   </div>
	
	
	
	
	
	<br><br><br><br>
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