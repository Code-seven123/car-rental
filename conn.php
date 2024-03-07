<?php 
	$host = "localhost";
	$username = "root";
	$password = "";
	$database_name = "irvan&husni_rental_mobil";
	$db_link = mysqli_connect($host, $username, $password, $database_name);
	if (!($db_link)) {
		echo "not connected";
	}
?>