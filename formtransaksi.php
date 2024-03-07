<?php 
include "conn.php";
function format($a){
	$parts = explode('-', $a);
	return $parts[0] . '-' . $parts[1] . '-' . $parts[2];
}

$sql = [
	mysqli_query($db_link, "select merk_motor from rental_mobil_mobil")
];

if (isset($_POST['admin'])) {
    $karyawan = $_POST['karyawan'];
    $kostumer = $_POST['kostumer'];
    $mobil = $_POST['mobil'];
    $pinjam = format($_POST['pinjam']);
    var_dump(format($_POST['pinjam']));
    $kembali = format($_POST['kembali']);
    $harga = $_POST['harga'];
    $denda = $_POST['denda'];
    $tgl = format($_POST['tgl']);
    $tdenda = $_POST['tdenda'];
    $status = $_POST['status'];
    $dikembalikan = format($_POST['dikembalikan']);
	
	$sql = "insert into rental_mobil_transaksi values ('', '$karyawan', '$kostumer', '$mobil', '$pinjam', '$kembali', '$harga', '$denda', '$tgl', '$tdenda', '$status', '$dikembalikan')";
	$query = mysqli_query($db_link, $sql);
	if ($query) {
		header('Location: admin.php');
	} else {
		header("Location: formadmin.php?msg=password+dengan+confirm+password+tidak+sesuai");
	}
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>ADD TRANSAKSI</title>
    <script src="https://unpkg.com/feather-icons"></script>
  </head>
  <body>
  	<div class="bg-success text-white p-3 mb-4">
  		<h1>TAMBAH DATA TRANSAKSI</h1>
  	</div>
    <?php if(isset($_GET['msg'])) {?>
    	<div class=" container">
    		<div class="alert alert-danger al" role="alert">
			  
			  <?= $_GET['msg'] ?>
			  <button type="button" class="btn btn-light" onclick="location.href = 'formadmin.php'"><i data-feather="x"></i></button>
			</div>
    	</div>
    <?php } ?>
  	<div class="container">
  		<form method="post">
  		  <input type="hidden" name="admin">
		  <div class="mb-3 row">
		    <label for="karyawan" class="col-sm-2 col-form-label">KARYAWAN ID</label>
		    <div class="col-sm-10">
		      <input type="number" class="form-control" id="karyawan" name="karyawan" required>
		    </div>
		  </div>
		  <div class="mb-3 row">
		    <label for="kostumer" class="col-sm-2 col-form-label">KOSTUMER ID</label>
		    <div class="col-sm-10">
		      <input type="number" class="form-control" id="kostumer" name="kostumer" required>
		    </div>
		  </div>
		  <div class="mb-3 row">
		    <label for="mobil" class="col-sm-2 col-form-label">MOBIL ID</label>
		    <div class="col-sm-10">
		      <input type="number" class="form-control" id="mobil" name="mobil" required>
		    </div>
		  </div>
		  <div class="mb-3 row">
		    <label for="pinjam" class="col-sm-2 col-form-label">TANGGAL PINJAM</label>
		    <div class="col-sm-10">
		      <input type="date" class="form-control" id="pinjam" name="pinjam" required>
		    </div>
		  </div>
		  <div class="mb-3 row">
		    <label for="kembali" class="col-sm-2 col-form-label">TANGGAL KEMBALI</label>
		    <div class="col-sm-10">
		      <input type="date" class="form-control" id="kembali" name="kembali" required>
		    </div>
		  </div>
		  <div class="mb-3 row">
		    <label for="harga" class="col-sm-2 col-form-label">HARGA</label>
		    <div class="col-sm-10">
		      <input type="number" class="form-control" id="harga" name="harga" required>
		    </div>
		  </div>
		  <div class="mb-3 row">
		    <label for="denda" class="col-sm-2 col-form-label">DENDA</label>
		    <div class="col-sm-10">
		      <input type="number" class="form-control" id="denda" name="denda" required>
		    </div>
		  </div>
		  <div class="mb-3 row">
		    <label for="tgl" class="col-sm-2 col-form-label">TANGGAL TRANSAKSI</label>
		    <div class="col-sm-10">
		      <input type="date" class="form-control" id="tgl" name="tgl" required>
		    </div>
		  </div>
		  <div class="mb-3 row">
		    <label for="tdenda" class="col-sm-2 col-form-label">TOTAL DENDA</label>
		    <div class="col-sm-10">
		      <input type="number" class="form-control" id="tdenda" name="tdenda" required>
		    </div>
		  </div>
		  <div class="mb-3 row">
		    <label for="status" class="col-sm-2 col-form-label">STATUS</label>
		    <div class="col-sm-10">
		      <input type="number" class="form-control" id="status" name="status" required>
		    </div>
		  </div>
		  <div class="mb-3 row">
		    <label for="dikembalikan" class="col-sm-2 col-form-label">TANGGAL DIKEMBALIKAN</label>
		    <div class="col-sm-10">
		      <input type="date" class="form-control" id="dikembalikan" name="dikembalikan" required>
		    </div>
		  </div>

		  <button type="submit" class="btn btn-primary">Submit</button>
		  <a href="admin.php" class="btn btn-info">BACK</a>
		</form>
  	</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
      feather.replace();
    </script>
  </body>
</html>