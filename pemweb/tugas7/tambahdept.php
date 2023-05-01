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
    $iddept = $_POST['iddept'];
    $namadept = $_POST['namadept'];

    $sql = "INSERT INTO data_department (id_department,nama_department) VALUES ('$iddept', '$namadept')";

    if (mysqli_query($conn, $sql)) {
        echo "Data berhasil ditambah";
    } else {
        echo "Terjadi kesalahan: " . mysqli_error($conn);
    }
}

    mysqli_close($conn);
?> 