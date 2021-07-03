<?php
    include ('crudsiswa.php');
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
    <h2>Daftar Siswa SMK RU</h2>
    Pilih Jurusan :
    <form action="bacasiswa3.php" method="post">
    <input type="radio" name="jurusan" value="TSM">TSM
    <input type="radio" name="jurusan" value="TB">TB
    <input type="radio" name="jurusan" value="TKJ">TKJ
    <br>
    <input type="submit" name = "" value="ok">
    <br>
    </form>
    <?php
    if(isset($_POST['jurusan'])){
        $jurusan = $_POST['jurusan'];
        $data = bacaSiswaPerjurusan($jurusan);
        if($data == null){
            echo "Tidak Ada Data Siswa";
        }else{
           ?>
            Jurusan <?php echo $jurusan; ?><br><br>
            <table border="1">
            <tr>
            <th>NIS</th>
            <th>Nama</th>
            <th>Kelamin</th>
            <th>Kelas</th>
            </tr>
           <?php
            foreach($data as $siswa){
            $nis = $siswa['nis'];
            $nama = $siswa['nama'];
            $kelamin = $siswa['kelamin'];
            $kelas = $siswa['kelas'];
            echo "
            <tr>
                <td>&emsp; $nis</td>
                <td>&emsp; $nama</td>
                <td>&emsp; $kelamin</td>
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