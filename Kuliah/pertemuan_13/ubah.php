<?php
//mengkoneksi dengan scrip php yang ada dalam file functions.php
require 'functions.php';

//menmbuta sission untuk memaksa user agar login dulu
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}


//Jika tidak ada id di url
if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit;
}

//ambil id dari url
$id = $_GET['id'];

//query mahasiswa berdasarkan mahasiswa
$m = query("select * from mahasiswa where id = $id");

// cek apakah tombol ubah sudah ditekan
if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                alert('data berhasil diubah');
                document.location.href = 'index.php';
            </script>";
    } else {
        echo ('data gagal diubah');
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Mahaiswa</title>
</head>

<body>
    <h3>Form Ubah Data Mahasiswa</h3>
    <a href="index.php">Kembali</a>
    <br><br>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $m['id']; ?>">
        <ul>
            <li>
                <label>
                    Nama :
                    <input type="text" name="nama" autofocus required value="<?= $m['nama']; ?>">
                </label>
            </li>
            <li>
                <label>
                    NRP :
                    <input type="text" name="nrp" required value="<?= $m['nrp']; ?>">
                </label>
            </li>
            <li>
                <label>
                    Email :
                    <input type="text" name="email" required value="<?= $m['email']; ?>">
                </label>
            </li>
            <li>
                <label>
                    Jurusan :
                    <input type="text" name="jurusan" required value="<?= $m['jurusan']; ?>">
                </label>
            </li>
            <li>
                <!-- untuk menangani nama gambar lama -->
                <input type="hidden" name="gambar_lama" value="<?= $m['gambar']; ?>">
                <label>
                    Gambar :
                    <input type="file" name="gambar" class="gambar" onchange="previewImage()">
                </label>
                <img src="img/<?= $m['gambar']; ?>" alt="" width="100" style="display: block;" class="img-preview">
            </li>
            <li>
                <button type="submit" name="ubah">Ubah Data</button>
            </li>
        </ul>
    </form>
    <script src="js/script.js"></script>
</body>

</html>