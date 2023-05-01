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
if (isset($_POST['Hapus'])) {
    $id = $_POST['id'];
    

    $sql = "DELETE FROM data_pegawai WHERE id = '$id'";

    if (mysqli_query($conn, $sql)) {
        echo "Data pegawai terhapus";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

    mysqli_close($conn);

?> 