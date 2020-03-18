<?php
	function OpenCon(){

		$dbhost= "localhost";
		$dbuser= "biroyalAdmin";
		$dbpassword= "biru@Admin";
		$dbname= "khabarodia";
		$conn = new mysqli($dbhost, $dbuser, $dbpassword, $dbname) or die("connection Failed");
		return $conn;
	}
	function CloseCon($con){
		$con->close();
	}
	

	
?>

