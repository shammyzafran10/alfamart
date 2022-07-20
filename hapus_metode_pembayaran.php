<?php

include('koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM metode_pembayaran WHERE id_metode_pembayaran = '$id'";

if($connection->query($query)) {
    header("location: tampil_metode_pembayaran.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>