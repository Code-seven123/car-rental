<?php 
include "conn.php";

$id = $_GET['id'];
$sql = "select * from rental_mobil_mobil where mobil_id='$id'";
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

    <title>UPDATE MOBIL</title>
    <script src="https://unpkg.com/feather-icons"></script>
  </head>
  <body>
  	<div class="bg-success text-white p-3 mb-4">
  		<h1>UPDATE DATA MOBIL</h1>
  	</div>
    <?php if(isset($_GET['msg'])) {?>
    	<div class=" container">
    		<div class="alert alert-danger al" role="alert">
			  
			  <?= $_GET['msg'] ?>
			  <button type="button" class="btn btn-light" onclick="location.href = '?id=<?= $id ?>'"><i data-feather="x"></i></button>
			</div>
    	</div>
    <?php } ?>
  	<div class="container">
  		<form method="post" action="mobilaction.php">
  		  <input type="hidden" name="admin">
  		  <input type="hidden" name="id" value="<?= $id ?>">
		  <div class="mb-3 row">
		    <label for="merk" class="col-sm-2 col-form-label">MERK</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="merk" name="merk" required value="<?= $data[1] ?>">
		    </div>
		  </div>
		  <div class="mb-3 row">
		    <label for="plat" class="col-sm-2 col-form-label">PLAT</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="plat" name="plat" required value="<?= $data[2] ?>">
		    </div>
		  </div>
		  <div class="mb-3 row">
		    <label for="warna" class="col-sm-2 col-form-label">WARNA</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="warna" name="warna" required value="<?= $data[3] ?>">
		    </div>
		  </div>
		  <div class="mb-3 row">
		    <label for="tahun" class="col-sm-2 col-form-label">TAHUN</label>
		    <div class="col-sm-10">
		      <input type="number" class="form-control" id="tahun" name="tahun" required value="<?= $data[4] ?>">
		    </div>
		  </div>
		  <div class="mb-3 row">
		    <label for="status" class="col-sm-2 col-form-label">STATUS</label>
		    <div class="col-sm-10">
		      <input type="number" class="form-control" id="status" name="status" required value="<?= $data[5] ?>">
		    </div>
		  </div>
		  <button type="submit" class="btn btn-primary">SAVE</button>
		  <a href="admin.php" class="btn btn-info">BACK</a>
		</form>
  	</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
      feather.replace();
    </script>
  </body>
</html>