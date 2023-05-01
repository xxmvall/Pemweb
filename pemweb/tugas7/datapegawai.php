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

$sql = "CREATE TABLE data_pegawai (
        id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nama VARCHAR(100) NOT NULL,
        email VARCHAR(50) NOT NULL,
        no_hp VARCHAR(50) NOT NULL,
        alamat VARCHAR(75) NOT NULL,
        gaji VARCHAR(100) NOT NULL,
        department_id int(10) UNSIGNED,
        FOREIGN KEY (department_id) REFERENCES data_department(id_department))";

if(mysqli_query($conn, $sql)) {
    echo "Table created successfully";
} else {
    echo "Error creating table: ". mysqli_error($conn);
}

mysqli_close($conn);

?>