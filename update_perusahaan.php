<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_perusahaan         = $_POST['id_perusahaan'];
$nama_perusahaan              = $_POST['nama_perusahaan'];
$alamat_perusahaan             = $_POST['alamat_perusahaan'];
$nomor_telp             = $_POST['nomor_telp'];
$email       = $_POST['email'];
$tanggal_berdiri        = $_POST['tanggal_berdiri'];
$npwp      = $_POST['npwp'];



//query update data ke dalam database berdasarkan ID
$query = "UPDATE perusahaan SET nama_perusahaan = '$nama_perusahaan', alamat_perusahaan = '$alamat_perusahaan' ,nomor_telp = '$nomor_telp', email = '$email' , tanggal_berdiri = '$tanggal_berdiri' , npwp = '$npwp' WHERE id_perusahaan = '$id_perusahaan'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: tampil_perusahaan.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>