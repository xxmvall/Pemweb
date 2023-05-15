<?php
session_start();

if (isset($_SESSION["login"])) {
    header("location : form-pendaftaran1.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>REGISTER</title>
</head>
<body style="background-color: blue;">

    <div class="auth">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="mb-5">REGISTER</h3>
                            <form method="post" action="register.php" class="needs-validation" novalidate>
                            
                                    <div class="form-group">
                                      <label>NIP</label>
                                      <input type="text" class="form-control" name="nip" placeholder="NIP">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input type="Text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap">
                                      </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="Text" class="form-control" name="email" placeholder="Email">
                                      </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="Text" class="form-control" name="password" placeholder="Password">
                                      </div>
                                    <div class="form-group my-4">
                                        <button class="btn btn-primary form-control" type="submit" name="Submit">Submit</button>
                                    </div>
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