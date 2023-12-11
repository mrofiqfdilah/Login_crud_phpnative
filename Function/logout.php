<?php 

@include '../database/koneksi.php';

session_start();
session_unset();
session_destroy();

header('location:../Log/Login.php');

 ?>