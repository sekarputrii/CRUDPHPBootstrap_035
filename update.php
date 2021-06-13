<?php

include './config.php';

$id = $_POST['id'];
$Nama = $_POST['Nama'];
$NIM = $_POST['NIM'];
$Alamat = $_POST['Alamat'];

mysqli_query($koneksi, "update mahasiswa set Nama = '$Nama', NIM = '$NIM', Alamat = '$Alamat' where id = '$id'");

header("location:index.php");
?>