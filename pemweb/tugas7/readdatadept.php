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

// perintah membaca data dalam tabel data_pegawai
if (isset($_POST['LihatData'])) {
    
    $sql = "SELECT id_department, nama_department FROM data_department";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "id department : " . $row["id_department"] ."<br>". " nama department : " . $row["nama_department"] ."<br>";
        }
    } else {
        echo " 0 results";
    }
    
    }
    else{
    $sql = "SELECT id_department, nama_department FROM data_department";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "id department : " . $row["id_department"] ."<br>". " nama department : " . $row["nama_department"] ."<br>";
        }
    } else {
        echo " 0 results";
    }
    }   

    mysqli_close($conn);
?>