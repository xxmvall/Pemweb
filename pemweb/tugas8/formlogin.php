<?php
session_start();
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>LOGIN</title>
</head>
<body>
<?php
    if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "gagal"){
            echo "<script>alert('Username atau Password salah!!')</script>";
        }else if($_GET['pesan'] == "logout"){
            echo "<script>alert('Anda telah berhasil logout')</script>";
        }else if($_GET['pesan'] == "belum_login"){
            echo "<script>alert('Anda harus login untuk mengakses halaman ini!!')</script>";
        }
    }
?>
    <div class="auth">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="mb-5">LOGIN</h3>
                            <form method="post" action="login.php">
                            
                                    <div class="form-group">
                                      <label>Email</label>
                                      <input type="text" class="form-control" name= "email" placeholder="Email" required>
                                    </div>
                                    <div class="form-group">
                                      <label >Password</label>
                                      <input type="password" class="form-control" name= "password" placeholder="Password" required>
                                    </div>
                                    <div class="form-group my-4">
                                        <button class="btn btn-primary form-control">Login</button>
                                    </div>
                                <p>Belum Punya Akun?<a href="formregister.php"> Register </a></p>
                            </form>

                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <script src="jquery-3.6.3.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
</body>
</html>