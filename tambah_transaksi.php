<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit transaksi</title>
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
        <a class="nav-link" href="tampil_Barang.php">Barang</a>
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

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH transaksi
            </div>
            <div class="card-body">
              <form action="simpan_transaksi.php" method="POST">
             
              <div class="form-group">
        <input type="hidden" name="id_transaksi" class="form-control">
                </div>
              <div class="form-group">
                  <label>Nama Kasir</label>
                  <?php 
                  include 'koneksi.php' ;
                  $sql= "SELECT * FROM kasir";
                  $query=mysqli_query($connection,$sql);
                  $a="( ";
                  $b=" ) ";
                  ?>
                  <select name="id_kasir" class="form-control">
                    <?php while($row=mysqli_fetch_array($query)){?>
                    <option value= "<?php echo $row['id_kasir'] ?>"><?php echo $row['id_kasir'].$a.$row['nama_kasir'].$b;?></option> 
                 <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                  <label>Nama Member</label>
                  <?php 
                  include 'koneksi.php' ;
                  $sql= "SELECT * FROM member";
                  $query=mysqli_query($connection,$sql);
                  $a="( ";
                  $b=" ) ";
                  ?>
                  <select name="id_member" class="form-control">
                    <?php while($row=mysqli_fetch_array($query)){?>
                    <option value= "<?php echo $row['id_member'] ?>"><?php echo $row['id_supplier'].$a.$row['nama_supplier'].$b;?></option> 
                 <?php } ?>
                    </select>
                </div>
              
                <div class="form-group">
                  <label>Metode Pembayaran</label>
                  <?php 
                  include 'koneksi.php' ;
                  $sql= "SELECT * FROM metode_pembayaran";
                  $query=mysqli_query($connection,$sql);
                  $a="( ";
                  $b=" ) ";
                  ?>
                  <select name="id_metode_pembayaran" class="form-control">
                    <?php while($row=mysqli_fetch_array($query)){?>
                    <option value= "<?php echo $row['id_metode_pembayaran'] ?>"><?php echo $row['id_metode_pembayaran'].$a.$row['nama_metode_pembayaran'].$b;?></option> 
                 <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                  <label>Kode Inv</label>
                  <input type="text" name="kode_inv"  placeholder="Masukkan Kode Inv transaksi" class="form-control" required>
                  
                </div>

 
                <div class="form-group">
                  <label>Waktu Transaksi</label>
                  <input type="date" name="waktu_transaksi"   class="form-control" required>
                </div>

                <div class="form-group">
                  <label>Nama Pembeli</label>
                  <input type="text" name="nama_pembeli"  placeholder="Masukkan Nama Pembeli " class="form-control" >
                </div>

                <div class="form-group">
                  <label>Total Bayar</label>
                  <input type="text" name="total_bayar"  placeholder="Masukkan Total Bayar transaksi" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>PPN</label>
                  <input type="text" name="ppn"  placeholder="Masukkan PPN " class="form-control" required>
                </div>

                <div class="form-group">
                  <label>DISKON</label>
                  <input type="text" name="diskon"  placeholder="Masukkan diskon " class="form-control" required>
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
