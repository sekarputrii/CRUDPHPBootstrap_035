<?php

include './config.php';

$ID = $_POST['ID'];
$Nama = $_POST['Nama'];
$NIM = $_POST['NIM'];
$Alamat = $_POST['Alamat'];

mysqli_query($koneksi, "update mahasiswa set Nama = '$Nama', NIM = '$NIM', Alamat = '$Alamat' where ID = '$ID'");

header("location:index.php");
?>