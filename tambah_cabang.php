<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <title>Tambah Cabang</title>
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
        <a class="nav-link" href="tampil_metode_pembayaran.php">Metode Pembayaran</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tampil_transaksi.php">transaksi</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container" style ="margin-top: 80px">
<div class="row">
    <div class="col-md-8 offset-md-2">
        <div class="card">
        <div class="card-header">
            TAMBAH Cabang
</div>
<div class="card-body">
    <form action="simpan_cabang.php" method="POST">

    <div class="form-group">
        <input type="hidden" name="id_cabang" class="form-control">
                </div>
               
                <div class="form-group">
                  <label>ID Perusahaan</label>
                  <?php 
                  include 'koneksi.php' ;
                  $sql= "SELECT * FROM perusahaan";
                  $query=mysqli_query($connection,$sql);
                  $a=". ";
                  ?>
                  <select name="id_perusahaan" class="form-control">
                    <?php while($row=mysqli_fetch_array($query)){?>
                    <option value= "<?php echo $row['id_perusahaan'] ?>"><?php echo $row['id_perusahaan'].$a.$row['nama_perusahaan'];?></option> 
                 <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                  <label>Nama Cabang</label>
                  <input type="text" name="nama_cabang" placeholder="Masukkan Nama cabang" class="form-control"required>
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" name="alamat_cabang" placeholder="Masukkan Alamat Member" rows="4"required></textarea>
                </div>
                
                <div class="form-group">
                  <label>Nomor TELP</label>
                  <input type="text" name="nomor_telp" placeholder="Masukkan Nomor TELP cabang" class="form-control"required>
                </div>

                <div class="form-group">
                  <label>Email</label>
                  <input type="text" name="email" placeholder="Masukkan Email cabang" class="form-control"required>
                </div>

              
               
                
                <button type="submit" class="btn btn-success">SIMPAN</button>
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


    