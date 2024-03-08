<?php
include('koneksi.php');

$nis = $_POST['nis'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$agama = $_POST['agama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];

// Insert data ke database
$query = mysqli_query($connection, "INSERT INTO siswa(nis, nama, kelas, jurusan, tempat_lahir, tanggal_lahir, agama, jenis_kelamin, alamat) VALUES('$nis','$nama','$kelas','$jurusan','$tempat_lahir','$tanggal_lahir','$agama','$jenis_kelamin','$alamat')");

// Redirect ke halaman utama
header("Location: index.php");
