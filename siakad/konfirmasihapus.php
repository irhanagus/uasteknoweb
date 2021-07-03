
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
    </head>
    <body>
    <?php 
    include('crudsiswa.php');
    $nis = $_GET['nis'];
    echo "
     <h2>Apakah anda yakin ingin menghapus data Siswa ini !</h2>
     <a href='teshapus.php?nis=$nis'>OK</a>
     <a href='bacasiswa2.php'>BATAL</a>
     </body>
    </html>
    ";?>





