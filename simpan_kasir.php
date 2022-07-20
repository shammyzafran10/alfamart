<?php

//include koneksi database
include('koneksi.php');
?>
<?php
//get data dari form
$id_kasir          = $_POST['id_kasir'];
$nama_kasir        = $_POST['nama_kasir'];
$alamat_kasir       = $_POST['alamat_kasir'];
$nomor_telp = $_POST['nomor_telp'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$id_cabang = $_POST['id_cabang'];
//query insert data ke dalam database
$query = "INSERT INTO kasir (id_kasir, nama_kasir, alamat_kasir, nomor_telp, jenis_kelamin, id_cabang) VALUES ('$id_kasir', '$nama_kasir', '$alamat_kasir','$nomor_telp','$jenis_kelamin','$id_cabang')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: tampil_kasir.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>