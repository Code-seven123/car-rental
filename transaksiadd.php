<?php  
include 'conn.php';
session_start();

function format($a){
	return number_format($a, 0, '', '.');
}
$tgl = [
	$_POST['pinjam'],
	$_POST['kembali']
];
$tgl_sekarang = date('y-m-d');
$karyawan = 0;
$kostumer = $_POST['kostumer'];
$mobil = $_POST['mobil'];
$pinjam = date("y-m-d", strtotime($tgl_sekarang . "+$tgl[0] days"));
$kembali = date("y-m-d", strtotime($pinjam . " +$tgl[1] days"));
$harga = $_POST['harga'];
$denda = $_POST['denda'];
$tgl = $tgl_sekarang;
$tdenda = 0;
$status = 1;
$dikembalikan = "0000-00-00";
$id = substr(uniqid(), 0, 16);

$sql = "insert into rental_mobil_transaksi values ('$id', '$karyawan', '$kostumer', '$mobil', '$pinjam', '$kembali', '$harga', '$denda', '$tgl', '$tdenda', '$status', '$dikembalikan')";
$query = mysqli_query($db_link, $sql);
if (!$query) {
	header("Location: transaksi.php?msg=password+dengan+confirm+password+tidak+sesuai");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Sukses</title>
  </head>
  <body>
    
  	<div class="container">
  		<h1 class="mt-5">Transaksi Sukses</h1>
  		<p>Informasi Pelanggan</p>
  		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">ID Transaksi</th>
		      <th scope="col">TANGGAL PINJAM</th>
		      <th scope="col">TANGGAL DIKEMBALIKAN</th>
		      <th scope="col">HARGA SEWA</th>
		      <th scope="col">DENDA PER KERUSAKAN</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <th scope="row"><?= $id ?></th>
		      <td><?= $pinjam ?></td>
		      <td><?= $kembali ?></td>
		      <td><?= format($harga) ?>.00 Rp</td>
		      <td><?= format($denda) ?>.00 Rp</td>
		    </tr>
		  </tbody>
		</table>

  	<a href="index.php" class="btn btn-outline-warning">BACK</a>
  	</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>