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
        <h2>Daftar Mata Pelajaran</h2>
        <table border="1">
            <tr>
                <th>Kode</th>
                <th>Nama</th>
                <th>JP</th>
                <th>Proses</th>
            </tr>

            <?php
                foreach($data as $mhs){
                    $kode = $mhs['kode'];
                    $nama = $mhs['nama'];
                    $jp = $mhs['jp'];

                    echo "
                    <tr>
                    <td>$kode</td>
                    <td>$nama</td>
                    <td>$jp</td>
                    <td><a href='konfirmasihapusmp.php?kode=$kode'>Hapus</a></td>
                    </tr>
                    ";
                }
            ?>
        </table>

    </body>

</html>