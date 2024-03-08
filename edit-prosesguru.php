<?php
include('koneksi.php');

$id = $_POST['id'];
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$mapel = $_POST['mapel'];

// Update data di database
$query = mysqli_query($connection, "UPDATE guru SET nip='$nip', nama='$nama', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin', agama='$agama', alamat='$alamat', mapel ='$mapel WHERE id='$id'");

// Redirect ke halaman utama
header("Location: indexguru.php");
