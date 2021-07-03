<?php
include('crudsiswa.php');
$nim = '1907';
$nama = 'Maya';
$kelamin = 'P';
$jurusan = 'TB';
$kelas = 'XII';
$hasil = tambahSiswa($nim, $nama, $kelamin, $jurusan, $kelas);
if($hasil > 0)
header("Location: bacasiswa2.php");
else
echo 'Gagal menambah record';
?>