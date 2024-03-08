<?php
include('koneksiguru.php');

$id = $_GET['id'];

// Hapus data dari database
$query = mysqli_query($connection, "DELETE FROM guru WHERE id='$id'");

// Redirect ke halaman utama
header("Location: index.php");
