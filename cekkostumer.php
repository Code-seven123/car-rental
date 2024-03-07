<?php 
include 'conn.php';
session_start();
if (!isset($_GET['id'])) {
	header('Location: index.php');
}
$userId = $_SESSION['userId'];
$sql = "select kostumer_id from rental_mobil_kostumer where user_id='$userId'";
$query = mysqli_query($db_link, $sql);
$why = mysqli_num_rows($query);
if($why != 0){
	header("Location: transaksi.php?mobil=$userId&kostumer=$why");
} else {
	header('Location: addkostumer.php');
}
?>