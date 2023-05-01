<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbkantor";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn){
    die("Connection failed: ".mysqli_connect_error());
} else {
    echo "Connection Success<br>";
}

// memasukkan data ke dbkantor tabel data pegawai
if (isset($_POST['Tambah'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];
    $gaji = $_POST['gaji'];
    $iddept = $_POST['iddept'];
    

    $sql = "INSERT INTO data_pegawai (id, nama, email, no_hp, alamat, gaji, department_id) VALUES ('$id', '$nama', '$email', '$no_hp', '$alamat', '$gaji', '$iddept')";

    if (mysqli_query($conn, $sql)) {
        echo "Data berhasil ditambah";
    } else {
        echo "Terjadi kesalahan: " . mysqli_error($conn);
    }
}


    mysqli_close($conn);

  
 ?> 
