<?php
    include('crudmp.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cari Mapel</title>
</head>

<body>
    <h2 style="color: blue;">Cari MataPelajaran</h2>

    <form action="carimp.php" method="get">
        <label>Kode :</label>
        <input type="text" name="cari" value="<?php if (isset($_GET['cari'])) {echo $_GET['cari']; } ?>">
        <input type="submit" value="Cari">
    </form>

    <br>

    <?php
    if (isset($_GET['cari'])) {
        $cari = $_GET['cari'];

        $data = cariMPDariKode($cari);

        if ($data == null) {
            echo "Data tidak ditemukan";
        } else {
    ?>

    <h2 style="color: blue; margin-top: 44px;">Data mapel</h2>
    <table>
        <?php
            foreach ($data as $siswa) {
                $kode = $siswa['kode'];
                $nama = $siswa['nama'];
                $sks = $siswa['jp'];

                echo "
                <tr>
                    <td>Kode :</td>
                    <td>$kode</td>
                </tr>
                <tr>
                    <td>Nama :</td>
                    <td>$nama</td>
                </tr>
                <tr>
                    <td>JP :</td>
                    <td>$jp</td>
                </tr>
                ";
            }
                echo '</table>';
        }
    }
    ?>
</body>

</html>