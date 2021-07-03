<?php
include('crudsiswa.php');
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$kelamin = $_POST['kelamin'];
$jurusan = $_POST['jurusan'];
$kelas = $_POST['kelas'];
$hasil = tambahSiswa($nis, $nama, $kelamin, $jurusan, $kelas);
if($hasil > 0)
header("Location: bacasiswa2.php");
else {
header("Location: gagaltambah.php");
}
?>