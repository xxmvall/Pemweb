<?php
session_start();
include 'koneksi.php';
// Handle form submission

    $nip= $_POST["nip"];
    $nama_lengkap= $_POST["nama_lengkap"];
    $email= $_POST["email"];
    $password = $_POST["password"];

        // Insert data into the table
        $query = "INSERT INTO akun ( nip, nama_lengkap, email, password) VALUES ('$nip','$nama_lengkap','$email', '$password')";
        mysqli_query($koneksi,$query);
  
header("location:formlogin.php");
// Close the database connection
?>
