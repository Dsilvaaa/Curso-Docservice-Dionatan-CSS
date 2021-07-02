<?php  


$host ="localhost:3306";
$user = "root";
$pass = "";
$base = "agenda";

$conn = new mysqli($host, $user, $pass, $base);
	if ($conn->connect_error) {
		die("Connection Failed: ". $conn->connect_error);
	 	// code...
	 } 
//echo "cheguei";
//die;

?>