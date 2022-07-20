<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Data member</title>
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
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              DATA member
            </div>
 
            <div class="card-body">
              <a href="tambah_member.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
              <table class="table table-bordered" id_member="myTable">
                <thead>
                  <tr>
                    
                    <th scope="col">NO</th>
                    <th scope="col">NAMA member</th>
                    <th scope="col">NO TELP</th>
                    <th scope="col">ALAMAT</th>
                    <th scope="col">JENIS KELAMIN</th>
                    
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      include('koneksi.php');
                      $no= 1 ;

                      $query = mysqli_query($connection,"SELECT * FROM member");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                     
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['nama_member'] ?></td>
                      <td><?php echo $row['no_telp'] ?></td>
                      <td><?php echo $row['alamat'] ?></td>
                      <td><?php echo $row['jenis_kelamin'] ?></td>
                   

                      <td class="text-center">
                        <a href="edit_member.php?id=<?php echo $row['id_member'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="hapus_member.php?id=<?php echo $row['id_member'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
                  </tr>

                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>
  </body>
</html>