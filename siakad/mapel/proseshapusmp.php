<?php

include ('crudmp.php');

    $kode = $_GET['kode'];

    $hasil = hapusMtPelajaran($kode);

    if ($hasil == true){
        header("Location: hapusmp.php");
    } else {
        header("Location: gagalhapusmp.php");
    }

?>