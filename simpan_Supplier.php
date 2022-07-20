<?php

//include koneksi database
include('koneksi.php');
?>
<?php
//get data dari form
$id_supplier         = $_POST['id_supplier'];
$nama_supplier        = $_POST['nama_supplier'];
$no_hp       = $_POST['no_hp'];
$alamat = $_POST['alamat'];
$no_rekening  = $_POST['no_rekening'];

//query insert data ke dalam database
$query = "INSERT INTO supplier (id_supplier, nama_supplier, no_hp, alamat, no_rekening) VALUES ('$id_supplier', '$nama_supplier', '$no_hp','$alamat','$no_rekening')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: tampil_supplier.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>