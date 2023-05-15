<?php
include 'koneksi.php';
$username   = $_POST['username'];
$pass       = md5($_POST['password']);



$user = mysqli_query($connect,"select * from akun where username='$username' and password='$pass'");
$chek = mysqli_num_rows($user);
if($chek>0)
{
    session_start();
    $row = mysqli_fetch_array($user);
    $_SESSION['nama_lengkap'] = $row['nama_lengkap'];
    header("location:welcome.php");
}else
{
    header("location:index.php");
}
?>