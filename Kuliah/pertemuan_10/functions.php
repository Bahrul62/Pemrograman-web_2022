<?php 

function koneksi()
{
    return mysqli_connect('localhost', 'root' , '' ,'pw_2022');
}


function query($query){
    $conn = koneksi();
    $result = mysqli_query($conn, $query);
    //jika hasilnya hanya 1 da ta
    if (mysqli_num_rows($result) == 1) {
        return mysqli_fetch_assoc($result);
        # code...
    }

    $rows = [];
    while($row = mysqli_fetch_array($result)){
        $rows[] = $row;
    }

    return $rows;
}

function tambah($data){
    $conn = koneksi();

    $nama = $data['nama'];
    $nrp = $data['nrp'];
    $email = $data['email'];
    $jurusan = $data['jurusan'];
    $gambar = $data['gambar'];

    $query = "INSERT INTO 
                mahasiswa 
                VALUES
                ('', '$nama' , '$nrp','$email','$jurusan','$gambar')";
    mysqli_query($conn, $query);
    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);

}

?>