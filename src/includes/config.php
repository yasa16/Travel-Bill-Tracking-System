<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tbts";

//Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

//Check Connection
if($conn->connect_error){
	die("Connection Failed!".$conn->connect_error);
}
//echo "<script> alert('Connected successfully')</script>";

?>