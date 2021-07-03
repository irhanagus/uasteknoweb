<!doctype html>

<?php
    include('crudmp.php');
    $sql="select * from mapel";
    $data = bacaMtPelajaran($sql);
?>

<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Data Mapel</title>
</head>

<body>

    <body>
        <h2>Daftar Mapel</h2>
        <table border="1">
            <tr>
                <th>Kode</th>
                <th>Nama</th>
                <th>JP</th>
                <th>Proses</th>
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
                    <td><a href='konfirmasiubahmp.php?kode=$kode'>Ubah</a></td>
                    </tr>
                    ";
                }
            ?>
        </table>

    </body>

</html>