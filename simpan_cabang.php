<?php

//include koneksi database
include('koneksi.php');
?>
<?php
//get data dari form
$id_cabang          = $_POST['id_cabang'];
$nama_cabang        = $_POST['nama_cabang'];
$alamat_cabang       = $_POST['alamat_cabang'];
$nomor_telp = $_POST['nomor_telp'];
$email  = $_POST['email'];
$id_perusahaan = $_POST['id_perusahaan'];
//query insert data ke dalam database
$query = "INSERT INTO cabang (id_cabang, nama_cabang, alamat_cabang, nomor_telp, email, id_perusahaan) VALUES ('$id_cabang', '$nama_cabang', '$alamat_cabang','$nomor_telp','$email','$id_perusahaan')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: tampil_cabang.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>