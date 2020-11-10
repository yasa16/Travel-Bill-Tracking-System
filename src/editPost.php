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
			<li class="menu"><a href="aboutus.html">About Us</a></li>
			<li class="menu"><a href="help.html">Help</a></li>
		</ul>
		
		<a href="index.html"><img  class="headerlogo" src="images/logo3.png" width="418.8px" height="126.8px"></a>
		
	</header>
	
	<br><br>
				<a href="profile.php" style="text-decoration:none;"><p  style="color:black; font-size:30px; font-family: calibri;">Back to Profile</p></a>
	<br><br>

<div>
	<table border = "2px">
		<tr>
		<th>Location</th>
		<th>Description</th>
		<th>Traveling Charges</th>
		<th>Accomodation Charges</th>
		<th>Edit</th>
		<th>Delete</th>
		</tr>
		
		<?php
			//Fetching data
			$id = $_SESSION['u_id'];
			$sql = "SELECT * FROM userpost WHERE userId = $id";
			$result = mysqli_query($conn, $sql);
			if(mysqli_num_rows($result) >0){
				//output data of each row
				//take one row and put into associate array
				while($row = mysqli_fetch_assoc($result)){
					$id = $row['postId'];
					echo "<tr><td>".$row['location']."</td>";
					echo "<td>".$row['description']."</td>";
					echo "<td>".$row['travellingCharges']."</td>";
					echo "<td>".$row['accomodationCharges']."</td>";
					echo "<td><button type='submit'><a style='text-decoration:none;' href='editFormPost.php'>Edit</a></td>";
					echo "<td><button type='submit'><a style='text-decoration:none;' href='includes/deletePostConfig.php?Id=$id'>Delete</a></td></tr>";
				}
			} else {
				echo "No results! You need to post something first.";
			}
			echo "</table>";
		?>
</div>

	<br><br><br><br>
	
<footer class="clearfix" style="padding:20px; background-color: #80ccff;">
		<div>
			<a href="index.html" class="footerNav">Home</a>
			<a href="tripnw.html" class="footerNav">Trips</a>
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