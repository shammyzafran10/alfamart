<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_supplier         = $_POST['id_supplier'];
$nama_supplier              = $_POST['nama_supplier'];
$no_hp             = $_POST['no_hp'];
$alamat       = $_POST['alamat'];
$no_rekening        = $_POST['no_rekening'];



//query update data ke dalam database berdasarkan ID
$query = "UPDATE supplier SET nama_supplier = '$nama_supplier', no_hp = '$no_hp', alamat = '$alamat' , no_rekening = '$no_rekening'  WHERE id_supplier = '$id_supplier'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: tampil_supplier.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>