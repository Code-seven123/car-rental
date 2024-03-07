<?php 

include "conn.php";
var_dump($_POST);
if (isset($_POST['admin'])) {
	var_dump($_POST);
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$jk = $_POST['jk'];
	$hp = $_POST['hp'];
	$ktp = $_POST['ktp'];
	$sql = "update rental_mobil_kostumer set kostumer_nama='$nama', kostumer_alamat='$alamat', kostumer_jk='$jk', kostumer_hp='$hp', kostumer_ktp='$ktp' where kostumer_id='$id'";
	$query = mysqli_query($db_link, $sql);
	if ($query) {
		header('Location: index.php');
	} else {
		header("Location: editkostumer.php?msg=data+tidak+sesuai&id=$id");
	}
}
?>