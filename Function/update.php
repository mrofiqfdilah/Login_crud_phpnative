<?php

include('../database/koneksi.php');

$id = $_POST['id'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$kelas = $_POST['kelas'];
$alasan = $_POST['alasan'];
$bidang = $_POST['bidang'];

$update = mysqli_query($koneksi , "UPDATE formulir SET nama='$nama', jenis_kelamin='$jenis_kelamin' , kelas='$kelas' , alasan='$alasan' ,  bidang='$bidang' WHERE id='$id' ");

header("location:../interface/home.php?");

?>