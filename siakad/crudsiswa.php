<?php
require_once 'koneksiakad.php';
// membaca (select) tabelmahasiswa
// jikaberhasil, hasil array drbaris-baris data
// dansetiapbaris data berupa array darinama-nama field
// jikatidakada,hasilberupanilai null
Function bacaSiswa($sql){
$data = array();
$koneksi = koneksiAkademik();
$hasil = mysqli_query($koneksi, $sql);
// jikatidakada record, hasilberupa null
if (mysqli_num_rows($hasil) == 0) {
mysqli_close($koneksi);
return null;
}
$i=0;
while($baris = mysqli_fetch_assoc($hasil)){
$data[$i]['nis']= $baris['nis'];
$data[$i]['nama'] = $baris['nama'];
$data[$i]['kelamin'] = $baris['kelamin'];
$data[$i]['jurusan'] = $baris['jurusan'];
$data[$i]['kelas'] = $baris['kelas'];
$i++;
}
mysqli_close($koneksi);
return $data;
}
// tambah 1 record ke tabel mahasiswa
// data yang dimasukkan berupa nim, nama, kelamin, jurusan
function bacaSemuaSiswa(){
    return bacaSiswa("SELECT * from siswa");
}

function bacaSiswaPerjurusan($jurusan){
    return bacaSiswa("SELECT * from siswa WHERE jurusan ='$jurusan'");
}

function cariSiswaDariNis($nis){
    return bacaSiswa("SELECT * from siswa WHERE nis ='$nis'");
}

function tambahSiswa($nis, $nama, $kelamin, $jurusan, $kelas){
    $koneksi = koneksiAkademik();
    $sql = "insert into siswa values('$nis', '$nama', '$kelamin', '$jurusan','$kelas')";
    $hasil = 0;
    if(mysqli_query($koneksi, $sql))
    $hasil = 1;
    mysqli_close($koneksi);
    return $hasil;
}

// menghapus 1 record berdasar field kunci nim
function hapusSiswa($nis){
$koneksi = koneksiAkademik();
$sql = "delete from mahasiswa where nis='$nis'";
if (!mysqli_query($koneksi, $sql)){
die('Error: ' . mysqli_error());
}
$hasil = mysqli_affected_rows($koneksi);
mysqli_close($koneksi);
return $hasil;
}
// mencari data berdasar nim
// jika ada, hasil array dengan indeks berupa nama field
// jika tidak ada hasil berupa nilai null
function cariSiswa($nis){
    $koneksi = koneksiAkademik();
    $sql = "select * from siswa where nis='$nis'";
    $hasil = mysqli_query($koneksi, $sql);
    if(mysqli_num_rows($hasil)>0){
    $baris=mysqli_fetch_assoc($hasil);
    $data['nis']=$baris['nis'];
    $data['nama'] = $baris['nama'];
    $data['kelamin'] = $baris['kelamin'];
    $data['jurusan'] = $baris['jurusan'];
    $data['kelas'] = $baris['kelas'];
    mysqli_close($koneksi);
    return $data;
    }else{
    mysqli_close($koneksi);
    return null;
    }
}
// mengubah (update) record berdasar nim
// data baru berupa nama, kelamin, jurusan
// dimasukkan dalam parameter fungsi
function ubahSiswa($nis, $nama, $kelamin, $jurusan, $kelas){
    $koneksi = koneksiAkademik();
    $sql = "UPDATE mahasiswa
    SET nama ='$nama',
    kelamin = '$kelamin',
    jurusan = '$jurusan',
    kelas = '$kelas'
    WHERE nis='$nis'";
    if (mysqli_query($koneksi, $sql)) {
    $hasil = true;
    } else {
    $hasil = "Error mengubah record: " . mysqli_error($koneksi);
    }
    mysqli_close($koneksi);
    return $hasil;
    }