<!DOCTYPE html>
<html>
<head>
<title>Daftar Siswa SMK RU</title>
</head>
<body>
<h2>Daftar Siswa SMK RU</h2>
<table border="1">
<tr>
<th>NIS</th>
<th>Nama</th>
<th>Jenis Kelamin</th>
<th>Jurusan</th>
<th>Kelas</th>
</tr>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "siakad";
// menciptakan koneksi
$koneksi = mysqli_connect($servername, $username, $password, $dbname);
// Cek koneksi
if (!$koneksi) {
die("Koneksi gagal: " . mysqli_connect_error());
}
$sql = "select * from siswa";
$hasil = mysqli_query($koneksi, $sql);
if (mysqli_num_rows($hasil) > 0) {
// output data setiap baris
while($baris = mysqli_fetch_assoc($hasil)) {
$nis = $baris['nis'];
$nama = $baris['nama'];
$kelamin = $baris['kelamin'];
$jurusan = $baris['jurusan'];
$kelas = $baris['kelas'];
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
} else {
echo "Tidak ada record";
}
mysqli_close($koneksi);
?>
</table>
</body>
</html>