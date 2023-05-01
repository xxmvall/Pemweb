<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn){
    die("Connection failed: ".mysqli_connect_error());
} else {
    echo "Connection Success<br>";
}

$sql = "CREATE TABLE buku_tamu (
        id_bt INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nama VARCHAR(200) NOT NULL,
        email VARCHAR(50) NOT NULL,
        isi text)";

if(mysqli_query($conn, $sql)) {
    echo "Table created successfully";
} else {
    echo "Error creating table: ". mysqli_error($conn);
}

mysqli_close($conn);

?>