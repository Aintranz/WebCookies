<?php  

	$dbserver = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbuse = "onlineCart";

	$conn = mysqli_connect($dbserver,$dbuser,$dbpass,$dbuse);

	if (!$conn) {
		die('Failed To Connect'.mysqli_error());
	}
	
?>