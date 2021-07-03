<?php
    include ('crudmp.php');
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Data Matapel</title>
</head>

<body>
    <?php
        $koneksi = koneksiAkademik();
        $kode = $_GET['kode'];
        $data = mysqli_query($koneksi, "select * from mapel where kode='$kode'");
        $edit = mysqli_fetch_array($data);
    ?>

    <h2><?php echo 'Apakah anda akan menghapus mapel ini?'.$kode ?></h2>
    <form action="proseshapusmp.php" method="GET">
        <input type="text" hidden name="kode" id="kode" value="<?php echo $edit['kode']; ?>">
        <input type="submit" value="OK">
        <a href="hapusmp.php"><input type="button" value="Batal"></a>
    </form>

</body>

</html>