<?php 
include "conn.php";
if (isset($_POST['admin'])) {
	var_dump($_POST);
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$jk = $_POST['jk'];
	$hp = $_POST['hp'];
	$ktp = $_POST['ktp'];
	
	$sql = "insert into rental_mobil_kostumer values ('', '$nama', '$alamat', '$jk', '$hp', '$ktp')";
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

    <title>ADD KOSTUMER</title>
    <script src="https://unpkg.com/feather-icons"></script>
  </head>
  <body>
  	<div class="bg-success text-white p-3 mb-4">
  		<h1>TAMBAH DATA KOSTUMER</h1>
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
		    <label for="nama" class="col-sm-2 col-form-label">nama</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="nama" name="nama" required>
		    </div>
		  </div>
		  <div class="mb-3 row">
		    <label for="alamat" class="col-sm-2 col-form-label">alamat</label>
		    <div class="col-sm-10">
		      <textarea class="form-control" id="alamat" style="min-height: 100px" name="alamat"></textarea>
		    </div>
		  </div>
		  <div class="mb-3 row">
		    <label for="jk" class="col-sm-2 col-form-label">JENIS KELAMIN</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="jk" name="jk" required>
		    </div>
		  </div>
		  <div class="mb-3 row">
		    <label for="hp" class="col-sm-2 col-form-label">NO HP</label>
		    <div class="col-sm-10">
		      <input type="number" class="form-control" id="hp" name="hp" required>
		    </div>
		  </div>
		  <div class="mb-3 row">
		    <label for="ktp" class="col-sm-2 col-form-label">KTP</label>
		    <div class="col-sm-10">
		      <input type="number" class="form-control" id="ktp" name="ktp" required>
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