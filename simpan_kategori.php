<?php

//include koneksi database
include('koneksi.php');
?>
<?php
//get data dari form
$id_kategori         = $_POST['id_kategori'];
$nama_kategori        = $_POST['nama_kategori'];

//query insert data ke dalam database
$query = "INSERT INTO kategori (id_kategori, nama_kategori) VALUES ('$id_kategori', '$nama_kategori')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: tampil_kategori.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>