<?php 
//hubungkan ke function
require 'functions.php';

//Jika tidak ada id di url
if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit;
}

//mengambil id dari url
$id = $_GET['id'];
if (hapus($id) > 0) {
       echo "<script>
                alert('data berhasil diHapus');
                document.location.href = 'index.php';
            </script>";
   } else {
       echo ('data gagal diHapus');
   }
?>