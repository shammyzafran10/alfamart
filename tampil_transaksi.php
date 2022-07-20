<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Data Transaksi</title>
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
        <li class="nav-item">
        <a class="nav-link" href="tampil_transaksi.php">transaksi</a>
      </li>
      </li>
    </ul>
  </div>
</nav>
	
  

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              DATA Transaksi
            </div>
 
            <div class="card-body">
              <a href="tambah_transaksi.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
              <table class="table table-bordered"  id_transaksi="myTable">
                <thead>
                  <tr>
                    
                    <th scope="col">NO</th>
                    <th scope="col">NAMA KASIR</th>
                    <th scope="col">NAMA MEMBER</th>
                    <th scope="col">METODE PEMBAYARAN</th>
                    <th scope="col">KODE INV</th>
                    <th scope="col">WAKTU TRANSAKSI</th>
                    <th scope="col">NAMA PEMBELI</th>
                    <th scope="col">TOTAL BAYAR</th>
                    <th scope="col">PPN</th>
                    <th scope="col">DISKON</th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      include('koneksi.php');
                     $no= 1 ;

                      $query = mysqli_query($connection,"SELECT * FROM transaksi inner join  kasir on kasir.id_kasir=transaksi.id_kasir 
                                                                              inner join member on member.id_member=transaksi.id_member
                                                                              inner join metode_pembayaran on metode_pembayaran.id_metode_pembayaran=transaksi.id_metode_pembayaran");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                     
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['nama_kasir'] ?></td>
                      <td><?php echo $row['nama_member'] ?></td>
                      <td><?php echo $row['nama_metode_pembayaran'] ?></td>
                      <td><?php echo $row['kode_inv'] ?></td>
                      <td><?php echo $row['waktu_transaksi'] ?></td>
                      <td><?php echo $row['nama_pembeli'] ?></td>
                      <td><?php echo $row['total_bayar'] ?></td>
                      <td><?php echo $row['ppn'] ?></td>
                      <td><?php echo $row['diskon'] ?></td>

                      <td class="text-center">
                        <a href="edit_transaksi.php?id=<?php echo $row['id_transaksi'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="hapus_transaksi.php?id=<?php echo $row['id_transaksi'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
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