<!DOCTYPE html>
<?php
include('crudsiswa.php');
$sql="select * from siswa";
$data = bacaSiswa($sql);
?>
<html>
<head>
<title>Daftar Siswa</title>
</head>
<body>
<h2>Daftar Siswa</h2>
<table border="1">
<tr>
<th>NIS</th>
<th>Nama</th>
<th>Jenis Kelamin</th>
<th>Jurusan</th>
<th>Kelas</th>
<th>Proses</th>
</tr>
<?php
foreach($data as $siswa){
$nis = $siswa['nis'];
$nama = $siswa['nama'];
$kelamin = $siswa['kelamin'];
$jurusan = $siswa['jurusan'];
$kelas = $siswa['kelas'];
echo ".
<tr>
<td>$nis</td>
<td>$nama</td>
<td>$kelamin</td>
<td>$jurusan</td>
<td>$kelas</td>
<td><a href='konfirmasiubah.php?nis=$nis'>Ubah</a></td>
</tr>
";
}
?>
</table>
</body>
</html>