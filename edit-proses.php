<?php
include('koneksi.php');

$id = $_POST['id'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$agama = $_POST['agama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];

// Update data di database
$query = mysqli_query($connection, "UPDATE siswa SET nis='$nis', nama='$nama', kelas='$kelas', jurusan='$jurusan', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', agama='$agama', jenis_kelamin='$jenis_kelamin', alamat='$alamat' WHERE id='$id'");

// Redirect ke halaman utama
header("Location: index.php");
