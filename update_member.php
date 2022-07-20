<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_member         = $_POST['id_member'];
$nama_member              = $_POST['nama_member'];
$no_telp             = $_POST['no_telp'];
$alamat       = $_POST['alamat'];
$jenis_kelamin        = $_POST['jenis_kelamin'];




//query update data ke dalam database berdasarkan ID
$query = "UPDATE member SET nama_member = '$nama_member', no_telp = '$no_telp', alamat = '$alamat' , jenis_kelamin = '$jenis_kelamin' WHERE id_member = '$id_member'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: tampil_member.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>