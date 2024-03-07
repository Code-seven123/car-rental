<?php 
include "conn.php";

var_dump($_GET);
$id = $_GET["id"];
$table = $_GET['table'];
if (!isset($_GET["id"]) && !isset($_GET['table'])) {
	header("Location: admin.php?table=$table");
}
if ($table == 'mobil') {
	$sql = "delete from rental_mobil_mobil where mobil_id='$id'";
	$query = mysqli_query($db_link, $sql);
	if ($query) {
		header("Location: admin.php?table=$table");
	}
} else if ($table == 'transaksi') {
	$sql = "delete from rental_mobil_transaksi where transaksi_id='$id'";
	$query = mysqli_query($db_link, $sql);
	if ($query) {
		header("Location: admin.php?table=$table");
	}
} else if ($table == 'kostumer') {
	$sql = "delete from rental_mobil_kostumer where kostumer_id='$id'";
	$query = mysqli_query($db_link, $sql);
	if ($query) {
		header("Location: admin.php?table=$table");
	}
} else if ($table == 'admin') {
	$sql = "delete from rental_mobil_admin where admin_id='$id'";
	$query = mysqli_query($db_link, $sql);
	if ($query) {
		header("Location: admin.php?table=$table");
	}
} else {
	header("Location: admin.php?table=$table");
}

?>