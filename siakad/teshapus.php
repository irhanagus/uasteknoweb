<?php
include('crudsiswa.php');
$nis = $_GET['nis'];
$hasil = hapusSiswa($nis);
if($hasil > 0){
    header("Location: bacasiswa2.php");
    }else {
    echo 'Gagal menghapus record';
    }
?>