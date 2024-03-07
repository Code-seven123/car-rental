<?php 
include "conn.php";
if (isset($_POST['admin'])) {
	var_dump($_POST);
	$merk = $_POST['merk'];
	$plat = $_POST['plat'];
	$warna = $_POST['warna'];
	$tahun = $_POST['tahun'];
	$status = $_POST['status'];
	$sql = "insert into rental_mobil_mobil values ('', '$merk', '$plat', '$warna', '$tahun', '$status')";
	$query = mysqli_query($db_link, $sql);
	if ($query) {
		header('Location: admin.php');
	} else {
		header("Location: formadmin.php?msg=data+yang+anda+masukan+tidak+sesuai+dengan+format");
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

    <title>ADD MOBIL</title>
    <script src="https://unpkg.com/feather-icons"></script>
  </head>
  <body>
  	<div class="bg-success text-white p-3 mb-4">
  		<h1>TAMBAH DATA MOBIL</h1>
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
		    <label for="merk" class="col-sm-2 col-form-label">MERK</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="merk" name="merk" required>
		    </div>
		  </div>
		  <div class="mb-3 row">
		    <label for="plat" class="col-sm-2 col-form-label">PLAT</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="plat" name="plat" required>
		    </div>
		  </div>
		  <div class="mb-3 row">
		    <label for="warna" class="col-sm-2 col-form-label">WARNA</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="warna" name="warna" required>
		    </div>
		  </div>
		  <div class="mb-3 row">
		    <label for="tahun" class="col-sm-2 col-form-label">TAHUN</label>
		    <div class="col-sm-10">
		      <input type="number" class="form-control" id="tahun" name="tahun" required>
		    </div>
		  </div>
		  <div class="mb-3 row">
		    <label for="status" class="col-sm-2 col-form-label">STATUS</label>
		    <div class="col-sm-10">
		      <input type="number" class="form-control" id="status" name="status" required>
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