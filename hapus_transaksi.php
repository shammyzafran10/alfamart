<?php

include('koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM transaksi WHERE id_transaksi = '$id'";

if($connection->query($query)) {
    header("location: tampil_transaksi.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>