<?php

include('koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM perusahaan WHERE id_perusahaan = '$id'";

if($connection->query($query)) {
    header("location: tampil_perusahaan.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>