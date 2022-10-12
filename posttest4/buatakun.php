<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUAT AKUN</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <h1 class="judul_buatakun">Silahkan  Buat Akunyaaa!!</h1>
    <form class="form" action="tampil2.php" method="POST">
            <input type="text" placeholder="First Name" name="namaawal">
            <br>
            <input type="text" placeholder="Last Name" name="namaakhir">
            <br>
            <input type="password" placeholder="Password" name="pw">
            <br>
            <input type="password" placeholder="Nomor Telpon" name="nohp">
            <br>
            <input type="date" placeholder="Tanggal Lahir Kamu" name="ttl">
            <input type="submit" name="Sign-Up">
    </form>

    <?php
        if(isset($_POST['Sign-Up'])){
            $namaawal = $_POST['namawal'];
            $namaakhir = $_POST['namaakhir'];
            $pw = $_POST['pw'];
            $nohp = $_POST['nohp'];
            $ttl = $_POST['ttl'];
        }
    ?>
</body>
</html>