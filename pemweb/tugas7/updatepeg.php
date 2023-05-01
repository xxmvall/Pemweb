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
if (isset($_POST['Update'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];
    $gaji = $_POST['gaji'];
    $iddept = $_POST['iddept'];

    $sql = "UPDATE data_pegawai SET id = '$id', nama = '$nama', email = '$email', no_hp = '$no_hp', alamat = '$alamat', gaji = '$gaji', id_department = '$iddept'";

    if (mysqli_query($conn, $sql)) {
        echo "Data berhasil diupdate";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

    mysqli_close($conn);

?> 