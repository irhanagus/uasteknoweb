<?php
    include('crudsiswa.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa SMK RU</title>
</head>
<body>
    <h2>Cari Siswa SMK RU</h2>
    <form action="carisiswa.php" method="post">
    NIS :
    <input type="text" name="nis">
    <input type="submit" name="submit" value="cari">
    </form>
    <?php
    if(isset($_POST['nis'])){
        $nis = $_POST['nis'];
        $data = cariSiswaDariNis($nis);
        if($data == null){
            echo "data tidak ada";
        }else{
            ?>
            <table>
            <?php
            foreach ($data as $siswa) {
                $nis = $siswa['nis'];
                $nama = $siswa['nama'];
                $kelamin = $siswa['kelamin'];
                $jurusan = $siswa['jurusan'];
                $kelas = $siswa['kelas'];
            echo "
                <tr>
                <td>NIS</td>
                <td>&emsp; $nis</td>
                </tr><br>
                <tr>
                <td>Nama</td>
                <td>&emsp; $nama</td>
                </tr><br>
                <tr>
                <td>Kelamin</td>
                <td>&emsp; $kelamin</td>
                </tr><br>
                <tr>
                <td>Jurusan</td>
                <td>&emsp; $jurusan</td>
                </tr><br>
                <tr>
                <td>Kelas</td>
                <td>&emsp; $kelas</td>
                </tr>
                ";
            }
            echo '</table>';
        }
    }
    ?>
</body>
</html>