<?php
 session_start();
    
 // Menghubungkan dengan koneksi
 include 'koneksi.php';
 
 // Menangkap data yang dikirim dari form
 $email = $_POST['email'];
 $password = $_POST['password'];
 
 // Menyeleksi data admin dengan username dan password yang sesuai
 $data = mysqli_query($koneksi, "SELECT * FROM akun WHERE email='$email' AND password='$password'");
 
 // Menghitung jumlah data yang ditemukan
 $cek = mysqli_num_rows($data);
 
 if($cek > 0){
     $_SESSION['email'] = $email;
     $_SESSION['status'] = "login";
     header("location:formpendaftaran1.php");
 }else{
     header("location:login.php?pesan=gagal");
 }
?>