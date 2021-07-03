<?php
    include('crudmp.php');

    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $sks = $_POST['jp'];

    $hasil = ubahMtPelajaran($kode, $nama, $jp);

    if($hasil > 0) {
        header("Location: ubahmp.php");
    } else {
        header("Location: gagalubahmp.php");
    }

?>