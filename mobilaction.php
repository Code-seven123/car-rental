<?php 
include "conn.php";
if (isset($_POST['admin'])) {
	var_dump($_POST);
	$id = $_POST['id'];
	$merk = $_POST['merk'];
	$plat = $_POST['plat'];
	$warna = $_POST['warna'];
	$tahun = $_POST['tahun'];
	$status = $_POST['status'];
	$sql = "update rental_mobil_mobil set mobil_merk='$merk', mobil_plat='$plat', mobil_warna='$warna', mobil_tahun='$tahun', mobil_status='$status' where mobil_id='$id'";
	$query = mysqli_query($db_link, $sql);
	if ($query) {
		header('Location: admin.php');
	} else {
		header("Location: editmobil.php?msg=data+yang+anda+masukan+tidak+sesuai+dengan+format&id=$id");
	}
} else {
	header("Location: editmobil.php?msg=data+yang+anda+masukan+tidak+sesuai+dengan+format&id=$id");
}

?>