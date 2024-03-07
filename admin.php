<?php 
include "conn.php";

function cek($type){
  $text = 'active';
  if (!isset($_GET['table']) || $_GET['table'] == $type && $type == 'mobil') {
    return $text;
  } else if($_GET['table'] == $type){
    return $text;
  }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>dashboard <?= isset($_GET['table']) ? $_GET['table'] : 'MOBIL'?></title>

    <style type="text/css">
      
      nav{
      width: 100vw;
      height: 4em;
      display: flex;
      justify-content: space-between;
      background-color: black;
      position: fixed;
      top: 0;
      left: 0;
      color: white;
      z-index: 1;
    }
    nav > div{
      height: 100%;
      display: flex;
      align-items: center;
      flex: 2;
    }
    nav > div:nth-child(1){
      margin-left: 1em;
      letter-spacing: 4px;
    }
    nav > div:nth-child(2){
      justify-content: flex-end;
      margin-right: 4em;
    }
    nav button{
      height: 70%;
      width: 8em;
      background-color: rgba(249, 240, 122, .6);
      padding: 0.2em;
      border-radius: 10px;
      border: 2px solid #9F70FD;
      transition: all .4s;
    }
    nav button:hover, nav a:hover{
      transform: scale(0.8);
      box-shadow: 0 0 1em #9F70FD;
    }
    </style>
  </head>
  <body>
    <nav>
      <div>
        <h1>RENTAL</h1>
      </div>
      <div>
        <div>
          <a href="add.php?table=<?= $_GET['table'] ?>" class="btn btn-primary">TAMBAH DATA</a>
        </div>
        </div>
        <div>
          <button onclick="location.href = 'logout.php'">logout</button>
        </div>
      </div>
    </nav>
    <div class="container bg-secondary text-white" style="margin-top: 4em">
      <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
              DATA <?= isset($_GET['table']) ? strtoupper($_GET['table']) : strtoupper('MOBIL')?>
            </button>
          </h2>
          <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <div class="list-group">
                <a href="?table=mobil" class="list-group-item list-group-item-action <?= cek('mobil')?>">DATA MOBIL</a>
                <a href="?table=transaksi" class="list-group-item list-group-item-action <?= cek('transaksi')?> activate">DATA TRANSAKSI</a>
                <a href="?table=kostumer" class="list-group-item list-group-item-action <?= cek('kostumer')?>">DATA KOSTUMER</a>
                <a href="?table=admin" class="list-group-item list-group-item-action <?= cek('admin')?>">DATA ADMIN</a>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    <?php 
      if(cek('mobil') == 'active'){
      $sql = "select * from ";
    ?>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">MERK</th>
            <th scope="col">PLAT</th>
            <th scope="col">WARNA</th>
            <th scope="col">TAHUN</th>
            <th scope="col">STATUS</th>
            <th scope="col">OPSI</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            $sql = "select * from rental_mobil_mobil";
            $query = mysqli_query($db_link, $sql);
            $no = 0;
            while ($data = mysqli_fetch_array($query)) {
          ?>
            <tr>
              <th scope="row"><?= $data[0]?></th>
              <td><?= $data[1]; ; ?></td>
              <td><?= $data[2]; ?></td>
              <td><?= $data[3]; ?></td>
              <td><?= $data[4]; ?></td>
              <td><?= $data[5]; ?></td>
              <td>
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                  <a href="edit.php?table=mobil&id=<?= $data[0]?>" class="btn btn-success">EDIT</a>
              
                  <a href="del.php?table=mobil&id=<?= $data[0]?>" class="btn btn-danger">HAPUS</a>
                </div>
              </td>
            </tr>
          <?php $no++; } ?>
        </tbody>
      </table>
    <?php } else if(cek('transaksi') == 'active') { ?>
      <div style="width: 100vw; overflow: scroll;">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">KARYAWAN</th>
              <th scope="col">KOSTUMER</th>
              <th scope="col">MOBIL</th>
              <th scope="col">TGL PINJAM</th>
              <th scope="col">TGL KEMBALI</th>
              <th scope="col">HARGA</th>
              <th scope="col">DENDA</th>
              <th scope="col">TANGGAL</th>
              <th scope="col">TOTAL DENDA</th>
              <th scope="col">STATUS</th>
              <th scope="col">TGL DIKEMBALIKAN</th>
              <th scope="col">OPSI</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              $sql = "select * from rental_mobil_transaksi";
              $query = mysqli_query($db_link, $sql);
              $no = 0;
              while ($data = mysqli_fetch_array($query)) {
            ?>
              <tr>
                <th scope="row"><?= $data[0]?></th>
                <td><?= $data[1]; ; ?></td>
                </td><td><?= $data[2]; ?></td>
                </td><td><?= $data[3]; ?></td>
                </td><td><?= $data[4]; ?></td>
                </td><td><?= $data[5]; ?></td>
                </td><td><?= $data[6]; ?></td>
                </td><td><?= $data[7]; ?></td>
                </td><td><?= $data[8]; ?></td>
                </td><td><?= $data[9]; ?></td>
                </td><td><?= $data[10]; ?></td>
                </td><td><?= $data[11]; ?></td>
                <td>
                  <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <a href="edit.php?table=transaksi&id=<?= $data[0]?>" class="btn btn-success">EDIT</a>
                
                    <a href="del.php?table=transaksi&id=<?= $data[0]?>" class="btn btn-danger">HAPUS</a>
                  </div>
                </td>
              </tr>
            <?php $no++; } ?>
          </tbody>
        </table>
      </div>
    <?php } else if(cek('kostumer') == 'active') { ?>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">NAMA</th>
            <th scope="col">ALAMAT</th>
            <th scope="col">JENIS KELAMIN</th>
            <th scope="col">NO HP</th>
            <th scope="col">KTP</th>
            <th scope="col">OPSI</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            $sql = "select * from rental_mobil_kostumer";
            $query = mysqli_query($db_link, $sql);
            $no = 0;
            while ($data = mysqli_fetch_array($query)) {
          ?>
            <tr>
              <th scope="row"><?= $data[0]?></th>
              <td><?= $data[1]; ; ?></td>
              <td><?= $data[2]; ?></td>
              <td><?= $data[3]; ?></td>
              <td><?= $data[4]; ?></td>
              <td><?= $data[5]; ?></td>
              <td>
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                  <a href="edit.php?table=kostumer&id=<?= $data[0]?>" class="btn btn-success">EDIT</a>
              
                  <a href="del.php?table=kostumer&id=<?= $data[0]?>" class="btn btn-danger">HAPUS</a>
                </div>
              </td>
            </tr>
          <?php $no++; } ?>
        </tbody>
      </table>
    <?php } else if(cek('admin') == 'active') { ?>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">NAMA</th>
            <th scope="col">USERNAME</th>
            <th scope="col">PASSWORD</th>
            <th scope="col">OPSI</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            $sql = "select * from rental_mobil_admin";
            $query = mysqli_query($db_link, $sql);
            $no = 0;
            while ($data = mysqli_fetch_array($query)) {
          ?>
            <tr>
              <th scope="row"><?= $data[0]?></th>
              <td><?= $data[1]; ; ?></td>
              <td><?= $data[2]; ?></td>
              <td><?= $data[3]; ?></td>
              <td>
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                  <a href="edit.php?table=admin&id=<?= $data[0]?>" class="btn btn-success">EDIT</a>
              
                  <a href="del.php?table=admin&id=<?= $data[0]?>" class="btn btn-danger">HAPUS</a>
                </div>
              </td>
            </tr>
          <?php $no++; } ?>
        </tbody>
      </table>
    <?php } else {  ?>
      <div class="alert alert-danger" role="alert">
        SYSTEM ERORR!!!!
      </div>
    <?php } ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>