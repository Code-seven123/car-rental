<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Transaksi</title>

    <style type="text/css">
    	.day{
    		display: flex;
    	}
    </style>
  </head>
  <body>
    
  	<div class="container pb-5">
  		<form method="post" action="transaksiadd.php">
  		  <input type="hidden" name="kostumer" value="<?= $_GET['kostumer'] ?>">
  		  <input type="hidden" name="mobil" value="<?= $_GET['mobil'] ?>">
		  <div class="mb-3 row mt-5">
		    <label for="pinjam" class="col-sm-2 col-form-label">TANGGAL PINJAM</label>
		    <div class="col-sm-10 day">
		      <input type="number" class="form-control" id="pinjam" name="pinjam" required style="width: 200px;">
		      <input class="form-control" value="Day" style="width: 70px;" disabled>
		    </div>
		  </div>
		  <div class="mb-3 row">
		    <label for="kembali" class="col-sm-2 col-form-label">TANGGAL KEMBALI</label>
		    <div class="col-sm-10 day">
		      <input type="number" class="form-control" id="kembali" name="kembali" required style="width: 200px;">
		      <input class="form-control" value="Day" style="width: 70px;" disabled>
		    </div>
		  </div>
		  <div class="mb-3 row">
		    <label for="harga" class="col-sm-2 col-form-label">HARGA</label>
		    <div class="col-sm-10 day">
		      <input type="number" class="form-control" id="harga" name="harga" readonly value="5000000" style="width: 200px;">
		      <input class="form-control" value="Rp" style="width: 70px;" disabled>
		    </div>
		  </div>
		  <div class="mb-3 row">
		    <label for="denda" class="col-sm-2 col-form-label">DENDA</label>
		    <div class="col-sm-10 day">
		      <input type="number" class="form-control" id="denda" name="denda" readonly value="1000000" style="width: 200px;">
		      <input class="form-control" value="Rp setiap kerusakan" style="width: 170px;" disabled>
		    </div>
		  </div>


		  <button type="submit" class="btn btn-primary">Submit</button>
		  <a href="index.php" class="btn btn-info">BACK</a>
		</form>
  	</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>