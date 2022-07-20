<?php 
  
  include('koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM kasir WHERE id_kasir = '$id'";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit kasir</title>
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

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT kasir
            </div>
            <div class="card-body">
              <form action="update_kasir.php" method="POST">
                
                <div class="form-group">
                  <label>Nama kasir</label>
                  <input type="text" name="nama_kasir" value="<?php echo $row['nama_kasir'] ?>" placeholder="Masukkan Nama kasir" class="form-control">
                  <input type="hidden" name="id_kasir" value="<?php echo $row['id_kasir'] ?>">
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" name="alamat_kasir"   placeholder="Masukkan Alamat Kasir" rows="4"><?php echo $row['alamat_kasir'] ?></textarea>
                </div>

                <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <br><input type="radio" name="jenis_kelamin" value="Laki -Laki" > Laki -Laki<br>
                  <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan<br>
                </div>

                <div class="form-group">
                  <label>No Telp</label>
                  <input type="text" name="nomor_telp" value="<?php echo $row['nomor_telp'] ?>" placeholder="Masukkan No Telepon Kasir" class="form-control"required>
                </div>
                
                <div class="form-group">
                  <label>ID Cabang</label>
                  <?php 
                  include 'koneksi.php' ;
                  $sql= "SELECT * FROM cabang";
                  $query=mysqli_query($connection,$sql);
                  $a=". ";
                  ?>
                  <select name="id_cabang" class="form-control">
                    <?php while($row=mysqli_fetch_array($query)){?>
                    <option value= "<?php echo $row['id_cabang'] ?>"><?php echo $row['id_cabang'].$a.$row['nama_cabang'];?></option> 
                 <?php } ?>
                    </select>
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
