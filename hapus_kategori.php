<?php

include('koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM kategori WHERE id_kategori = '$id'";

if($connection->query($query)) {
    header("location: tampil_kategori.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>