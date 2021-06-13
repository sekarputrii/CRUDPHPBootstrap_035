<?php
//include koneksi database
include './config.php';

//menangkap data yang dikirim dari form
$Nama = $_POST['Nama'];
$NIM = $_POST['NIM'];
$Alamat = $_POST['Alamat'];

//menginput data ke database
mysqli_query($koneksi, "insert into mahasiswa values('', '$Nama', '$NIM', '$Alamat')");
//mengembalikan ke halaman awal
header("location:./index.php");