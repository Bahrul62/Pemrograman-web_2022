<?php
require 'functions.php';

//menmbuta sission untuk memaksa user agar login dulu
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

//ambil id dari url
$id = $_GET['id'];
$m = query("SELECT * FROM mahasiswa WHERE id = $id");
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
        <li><img src="img/<?= $m['gambar']; ?>" alt="" width="100"></li>
        <li>NRP : <?= $m['nrp']; ?></li>
        <li>Nama : <?= $m['nama']; ?></li>
        <li>Email : <?= $m['email']; ?></li>
        <li>Jurusan : <?= $m['jurusan']; ?></li>
        <li>
            <a href="ubah.php?id=<?= $m['id']; ?>">Ubah</a>
            <a href="hapus.php?id=<?= $m['id']; ?>" onclick="return confirm('apakah anda yakin?')">hapus</a>
        </li>
        <li><a href="index.php">kembali ke daftar mahasiswa</a></li>
    </ul>
</body>

</html>