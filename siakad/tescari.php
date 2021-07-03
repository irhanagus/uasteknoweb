<?php
include('crudsiswa.php');
$kondisi = "jurusan = 'TB'";
$data = bacaSemuaSiswa($kondisi);
if($data != null){
foreach($data as $siswa){
$nis = $siswa['nis'];
$nama = $siswa['nama'];
echo "$nis, $nama <br>";
}
}
else {
echo 'Tidak ada data';
}
?>