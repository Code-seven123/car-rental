<?php 
include "conn.php";
$id = $_GET['id'];

$sql = "select * from rental_mobil_transaksi where transaksi_id=$id";
$query = mysqli_query($db_link, $sql);
$data = mysqli_fetch_array($query);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>UPDATE TRANSAKSI</title>
    <script src="https://unpkg.com/feather-icons"></script>
  </head>
  <body>
  	<div class="bg-success text-white p-3 mb-4">
  		<h1>UPDATE DATA TRANSAKSI</h1>
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
  		<form method="post" action="transaksiaction.php">
  		  <input type="hidden" name="admin">
  		  <input type="hidden" name="id" value="<?= $data[0] ?>">
		  <div class="mb-3 row">
		    <label for="karyawan" class="col-sm-2 col-form-label">KARYAWAN ID</label>
		    <div class="col-sm-10">
		      <input type="number" class="form-control" id="karyawan" name="karyawan" required value="<?= $data[1] ?>">
		    </div>
		  </div>
		  <div class="mb-3 row">
		    <label for="kostumer" class="col-sm-2 col-form-label">KOSTUMER ID</label>
		    <div class="col-sm-10">
		      <input type="number" class="form-control" id="kostumer" name="kostumer" required value="<?= $data[2] ?>">
		    </div>
		  </div>
		  <div class="mb-3 row">
		    <label for="mobil" class="col-sm-2 col-form-label">MOBIL ID</label>
		    <div class="col-sm-10">
		      <input type="number" class="form-control" id="mobil" name="mobil" required value="<?= $data[3] ?>">
		    </div>
		  </div>
		  <div class="mb-3 row">
		    <label for="pinjam" class="col-sm-2 col-form-label">TANGGAL PINJAM</label>
		    <div class="col-sm-10">
		      <input type="date" class="form-control" id="pinjam" name="pinjam" required value="<?= $data[4] ?>">
		    </div>
		  </div>
		  <div class="mb-3 row">
		    <label for="kembali" class="col-sm-2 col-form-label">TANGGAL KEMBALI</label>
		    <div class="col-sm-10">
		      <input type="date" class="form-control" id="kembali" name="kembali" required value="<?= $data[5] ?>">
		    </div>
		  </div>
		  <div class="mb-3 row">
		    <label for="harga" class="col-sm-2 col-form-label">HARGA</label>
		    <div class="col-sm-10">
		      <input type="number" class="form-control" id="harga" name="harga" required value="<?= $data[6] ?>">
		    </div>
		  </div>
		  <div class="mb-3 row">
		    <label for="denda" class="col-sm-2 col-form-label">DENDA</label>
		    <div class="col-sm-10">
		      <input type="number" class="form-control" id="denda" name="denda" required value="<?= $data[7] ?>">
		    </div>
		  </div>
		  <div class="mb-3 row">
		    <label for="tgl" class="col-sm-2 col-form-label">TANGGAL TRANSAKSI</label>
		    <div class="col-sm-10">
		      <input type="date" class="form-control" id="tgl" name="tgl" required value="<?= $data[8] ?>">
		    </div>
		  </div>
		  <div class="mb-3 row">
		    <label for="tdenda" class="col-sm-2 col-form-label">TOTAL DENDA</label>
		    <div class="col-sm-10">
		      <input type="number" class="form-control" id="tdenda" name="tdenda" required value="<?= $data[9] ?>">
		    </div>
		  </div>
		  <div class="mb-3 row">
		    <label for="status" class="col-sm-2 col-form-label">STATUS</label>
		    <div class="col-sm-10">
		      <input type="number" class="form-control" id="status" name="status" required value="<?= $data[10] ?>">
		    </div>
		  </div>
		  <div class="mb-3 row">
		    <label for="dikembalikan" class="col-sm-2 col-form-label">TANGGAL DIKEMBALIKAN</label>
		    <div class="col-sm-10">
		      <input type="date" class="form-control" id="dikembalikan" name="dikembalikan" required value="<?= $data[11] ?>">
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