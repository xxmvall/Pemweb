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
    
    $sql = "SELECT id, nama, email, no_hp, alamat, gaji, department_di FROM data_pegawai";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "id : " . $row["id"] ."<br>". " nama : " . $row["nama"] ."<br>". "email : " . $row["email"] ."<br>". "no hp : " . $row["no_hp"] ."<br>"."alamat : " . $row["alamat"] ."<br>"."gaji : " . $row["gaji"] ."<br>"."id department : " . $row["department_id"] ."<br>";
        }
    } else {
        echo " 0 results";
    }
    
    }
    else{
        $sql = "SELECT id, nama, email, no_hp, alamat, gaji, department_id FROM data_pegawai";
        $result = mysqli_query($conn, $sql);
    
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "id : " . $row["id"] ."<br>". " nama : " . $row["nama"] ."<br>". "email : " . $row["email"] ."<br>". "no hp : " . $row["no_hp"] ."<br>"."alamat : " . $row["alamat"] ."<br>"."gaji : " . $row["gaji"] ."<br>"."id department : " . $row["department_id"] ."<br>";
            }       
        } else {
            echo " 0 results";
        }
    }

    mysqli_close($conn);

?> 