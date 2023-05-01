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

$sql = "CREATE TABLE data_department (
        id_department INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nama_department VARCHAR(100) NOT NULL)";

if(mysqli_query($conn, $sql)) {
    echo "Table created successfully";
} else {
    echo "Error creating table: ". mysqli_error($conn);
}

mysqli_close($conn);

?>