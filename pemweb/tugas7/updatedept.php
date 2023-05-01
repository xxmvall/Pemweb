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
    $iddept = $_POST['iddept'];
    $namadept = $_POST['namadept'];

    $sql = "UPDATE data_department SET id_department = '$iddept', nama_department = '$namadept'";

    if (mysqli_query($conn, $sql)) {
        echo "Data berhasil diupdate";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

    mysqli_close($conn);

?> 