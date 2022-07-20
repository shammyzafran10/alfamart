<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_metode_pembayaran         = $_POST['id_metode_pembayaran'];
$nama_metode_pembayaran              = $_POST['nama_metode_pembayaran'];



//query update data ke dalam database berdasarkan ID
$query = "UPDATE metode_pembayaran SET nama_metode_pembayaran = '$nama_metode_pembayaran'  WHERE id_metode_pembayaran = '$id_metode_pembayaran'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: tampil_metode_pembayaran.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>