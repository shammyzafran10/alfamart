<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_kasir         = $_POST['id_kasir'];
$nama_kasir              = $_POST['nama_kasir'];
$alamat_kasir             = $_POST['alamat_kasir'];
$nomor_telp       = $_POST['nomor_telp'];
$jenis_kelamin        = $_POST['jenis_kelamin'];
$id_cabang      = $_POST['id_cabang'];



//query update data ke dalam database berdasarkan ID
$query = "UPDATE kasir SET nama_kasir = '$nama_kasir', alamat_kasir = '$alamat_kasir', nomor_telp = '$nomor_telp' , jenis_kelamin = '$jenis_kelamin' , id_cabang = '$id_cabang' WHERE id_kasir = '$id_kasir'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: tampil_kasir.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>