<?php
include('crudsiswa.php');
$nim = "1906";
$nama = "Irhan";
$kelamin = "L";
$jurusan = "TSM";
$kelas = "X";
$hasil = ubahMhs($nim, $nama, $kelamin, $jurusan, $kelas);
if($hasil == true){
echo "Berhasil";
}else{
echo "Error";
}
?>