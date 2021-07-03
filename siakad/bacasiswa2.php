<?php
include('crudsiswa.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Daftar Siswa/i SMK RU</title>
</head>
<body>
<h2>Daftar Siswa/i SMK RU</h2>
<?php
$sql ="select * from siswa";
$data = bacaSiswa($sql);
if($data == null){
echo "Tidak ada data siswa";
}else{
?>
<table border="1">
<tr>
<th>NIM</th>
<th>Nama</th>
<th>JenisKelamin</th>
<th>Jurusan</th>
<th>Kelas</th>
</tr>
<?php
foreach($data as $siswa){
$nis = $siswa['nis'];
$nama = $siswa['nama'];
$kelamin = $siswa['kelamin'];
$jurusan = $siswa['jurusan'];
$kelas = $siswa['kelas'];
echo "
<tr>
<td>$nis</td>
<td>$nama</td>
<td>$kelamin</td>
<td>$jurusan</td>
<td>$kelas</td>
</tr>
";
}
echo '</table>';
}
?><br>
<a href="tambahsiswa.php">Tambah data Siswa</a>
</body>
</html>