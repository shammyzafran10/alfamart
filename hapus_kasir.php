<?php

include('koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM kasir WHERE id_kasir = '$id'";

if($connection->query($query)) {
    header("location: tampil_kasir.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>