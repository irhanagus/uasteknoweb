<?php
    include('crudmp.php');

    $kode= $_POST['kode'];
    $nama = $_POST['nama'];
    $jp = $_POST['jp'];

    $hasil = tambahMtPelajaran($kode, $nama, $jp);

    if($hasil > 0) {
        header("Location: bacamp.php");
    } else {
        header("Location: gagaltambahmp.php");
    }
?>