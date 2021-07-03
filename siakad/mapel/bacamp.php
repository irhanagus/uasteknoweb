<?php
    include('crudmp.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Daftar Mapel</title>
</head>

<body>
    <h2>Daftar Pelajaran</h2>
    <?php
        $sql ="select * from mapel";
        $data = bacaMtPelajaran($sql);

        if ($data == null) {
            echo "Tidak ada data mapel";
        } else {
    ?>

    <table border="1">
        <tr>
            <th>Kode</th>
            <th>Nama</th>
            <th>jp</th>
        </tr>

        <?php
            foreach($data as $siswa){
                $kode = $siswa['kode'];
                $nama = $siswa['nama'];
                $jp = $siswa['jp'];

                echo "
                <tr>
                <td>$kode</td>
                <td>$nama</td>
                <td>$jp</td>
                </tr>
                ";
            }
             echo '</table>';
        }
    ?>

        <br>
        <a href="tambahmp.php">Tambah Data Mapel</a>
</body>

</html>