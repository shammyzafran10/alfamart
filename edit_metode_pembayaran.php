<?php 
  
  include('koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM metode_pembayaran WHERE id_metode_pembayaran = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Metode Pembayaran</title>
  </head>

  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Beranda</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="tampil_supplier.php">Supplier</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tampil_kategori.php">Kategori</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tampil_barang.php">Barang</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="tampil_perusahaan.php">Perusahaan</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="tampil_cabang.php">cabang</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="tampil_kasir.php">kasir</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="tampil_member.php">member</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tampil_metode_pembayaran.php">metode_pembayaran</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tampil_transaksi.php">transaksi</a>
      </li>
    </ul>
  </div>
</nav>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT METODE PEMBAYARAN
            </div>
            <div class="card-body">
              <form action="update_metode_pembayaran.php" method="POST">
                
                <div class="form-group">
                  <label>Nama Metode Pembayaran</label>
                  <input type="text" name="nama_metode_pembayaran" value="<?php echo $row['nama_metode_pembayaran'] ?>" placeholder="Masukkan Nama metode_pembayaran" class="form-control"required>
                  <input type="hidden" name="id_metode_pembayaran" value="<?php echo $row['id_metode_pembayaran'] ?>">
                </div>


                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>
