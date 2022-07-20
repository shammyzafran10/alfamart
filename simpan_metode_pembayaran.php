<?php

//include koneksi database
include('koneksi.php');
?>
<?php
//get data dari form
$id_metode_pembayaran         = $_POST['id_metode_pembayaran'];
$nama_metode_pembayaran        = $_POST['nama_metode_pembayaran'];

//query insert data ke dalam database
$query = "INSERT INTO metode_pembayaran (id_metode_pembayaran, nama_metode_pembayaran) VALUES ('$id_metode_pembayaran', '$nama_metode_pembayaran')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: tampil_metode_pembayaran.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>