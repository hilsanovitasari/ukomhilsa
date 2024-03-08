<?php
include('koneksiguru.php');

$nip = $_POST['nip'];
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$mapel = $_POST['mapel'];

// Insert data ke database
$query = mysqli_query($connection, "INSERT INTO guru(nip, nama, tempat_lahir, tanggal_lahir, jenis_kelamin, agama, alamat, mapel) VALUES('$nip','$nama','$tempat_lahir','$tanggal_lahir','$jenis_kelamin,'$agama','$alamat','$mapel')");

// Redirect ke halaman utama
header("Location: indexguru.php");
