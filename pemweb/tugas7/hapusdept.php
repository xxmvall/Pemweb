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
    $iddept = $_POST['iddept'];
    

    $sql = "DELETE FROM data_department WHERE id_department = '$iddept'";

    if (mysqli_query($conn, $sql)) {
        echo "Data  department terhapus";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

    mysqli_close($conn);

?> 