<?php

include('koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM barang WHERE id_barang = '$id'";

if($connection->query($query)) {
    header("location: tampil_barang.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>