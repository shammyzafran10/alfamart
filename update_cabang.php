<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_cabang         = $_POST['id_cabang'];
$nama_cabang              = $_POST['nama_cabang'];
$alamat_cabang             = $_POST['alamat_cabang'];
$nomor_telp       = $_POST['nomor_telp'];
$email        = $_POST['email'];
$id_perusahaan      = $_POST['id_perusahaan'];



//query update data ke dalam database berdasarkan ID
$query = "UPDATE cabang SET nama_cabang = '$nama_cabang', alamat_cabang = '$alamat_cabang', nomor_telp = '$nomor_telp' , email = '$email' , id_perusahaan = '$id_perusahaan' WHERE id_cabang = '$id_cabang'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: tampil_cabang.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>