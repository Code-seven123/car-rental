<?php  
include "conn.php";
function format($a){
	$parts = explode('-', $a);
	return $parts[0] . '-' . $parts[1] . '-' . $parts[2];
}
if (isset($_POST['admin'])) {
	$id = $_POST['id'];
    $karyawan = $_POST['karyawan'];
    $kostumer = $_POST['kostumer'];
    $mobil = $_POST['mobil'];
    $pinjam = format($_POST['pinjam']);
    $kembali = format($_POST['kembali']);
    $harga = $_POST['harga'];
    $denda = $_POST['denda'];
    $tgl = format($_POST['tgl']);
    $tdenda = $_POST['tdenda'];
    $status = $_POST['status'];
    $dikembalikan = format($_POST['dikembalikan']);
	
	$sql = "update rental_mobil_transaksi set transaksi_karyawan='$karyawan', transaksi_kostumer='$kostumer', transaksi_mobil='$mobil', transaksi_tgl_pinjam='$pinjam', transaksi_tgl_kembali='$kembali', transaksi_harga='$harga', transaksi_denda='$denda', transaksi_tgl='$tgl', transaksi_totaldenda='$tdenda', transaksi_status='$status', transaksi_tgl_dikembalikan='$dikembalikan' where transaksi_id='$id'";
	$query = mysqli_query($db_link, $sql);
	if ($query) {
		header('Location: admin.php');
	} else {
		header("Location: edittransaksi.php?msg=data+tidak+sesuai&id=$id");
	}
}

?>