<?php

//koneksi
include "koneksi.php";
$isi_laporan = $_POST['isi_laporan'];
$id =$_GET['id_pengaduan'];

$query = $koneksi->query("UPDATE 'pengaduan' SET isi_laporan='$isi_laporan'where id_pengaduan='$id'");
header("location:home.php");
?>