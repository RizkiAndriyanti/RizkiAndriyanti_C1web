<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AKUN</title>
</head>
<body>
<?php
        if(isset($_POST['Sign-Up'])){
            $namaawal = $_POST['namaawal'];
            $namaakhir = $_POST['namaakhir'];
            $pw = $_POST['pw'];
            $nohp = $_POST['nohp'];
            $ttl = $_POST['ttl'];
        }
        echo "Nama     : $namaawal $namaakhir <br></br>";
        echo "No HP kamu     : $nohp <br></br>";
        echo "Tanggal Lahir Kamu     : $ttl";
    ?>
</body>
</html>