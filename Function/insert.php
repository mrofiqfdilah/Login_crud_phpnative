<?php

@include '../database/koneksi.php';

$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$kelas = $_POST['kelas'];
$alasan = $_POST['alasan'];
$bidang = $_POST['bidang'];

$insert = "INSERT INTO formulir VALUES('','$nama','$jenis_kelamin','$kelas','$alasan','$bidang')";

mysqli_query($koneksi, $insert);
// After successfully inserting data
header("Location: ../interface/home.php");
exit;

?>