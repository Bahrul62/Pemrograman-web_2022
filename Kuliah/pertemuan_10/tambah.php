<?php 
//mengkoneksi dengan scrip php yang ada dalam file functions.php
require 'functions.php';

// cek apakah tombol sudah ditekan
if (isset($_POST['tambah'])) {
   if (tambah($_POST) > 0) {
       echo "<script>
                alert('data berhasil ditambahkan');
                document.location.href = 'index.php';
            </script>";
   } else {
       echo ('data gagal di tambahkan');
   }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahaiswa</title>
</head>
<body>
    <h3>Form Tambah Data Mahasiswa</h3>
    <a href="latihan3.php">Kembali</a>
    <br><br>
    <form action="" method="POST">
        <ul>
            <li>
                <label>
                    Nama :
                    <input type="text" name="nama" autofocus required>
                </label>
            </li>
            <li>
                <label>
                    NRP :
                    <input type="text" name="nrp" required>
                </label>
            </li>
            <li>
                <label>
                    Email :
                    <input type="text" name="email" required>
                </label>
            </li>
            <li>
                <label>
                    Jurusan :
                    <input type="text" name="jurusan" required>
                </label>
            </li>
            <li>
                <label>
                    Gambar :
                    <input type="text" name="gambar" required>
                </label>
            </li>
            <li>
                <button type="submit" name="tambah">Tambah Data</button>
            </li>
        </ul>
    </form>
</body>
</html>