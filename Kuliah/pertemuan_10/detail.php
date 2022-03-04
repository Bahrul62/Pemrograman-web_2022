<?php 
require 'functions.php';


//ambil id dari url
$id = $_GET['id'];
$m = query("select * from mahasiswa where id = $id");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>detail mahasiswa</title>
</head>
<body>
    <h3>detail mahasiswa</h3>
    <ul>
        <li><img src="img/<?= $m['gambar']; ?>" alt=""></li>
        <li>NRP : <?= $m['nrp']; ?></li>
        <li>Nama : <?= $m['nama']; ?></li>
        <li>Email : <?= $m['email']; ?></li>
        <li>Jurusan : <?= $m['jurusan']; ?></li>
        <li><a href="">Ubah</a>|<a href="">hapus</a></li>
        <li><a href="latihan3.php">kembali ke daftar mahasiswa</a></li>
    </ul>
</body>
</html>