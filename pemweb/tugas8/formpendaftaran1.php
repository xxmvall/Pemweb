<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>PENDAFTARAN</title>
</head>

<body>

<?php 
            session_start();
            if($_SESSION['status']!="login"){
                header("location:login.php?pesan=belum_login");
            }

            if(isset($_GET['tgl'])){
                if($_GET['tgl'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'>Tanggal Pengisian Formulir Belum Di Isi !</h5>";
                }
            }
            if(isset($_GET['jenis_pendaftaran'])){
                if($_GET['jenis_pendaftaran'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'>Jenis Pendaftaran Belum Di Isi !</h5>";
                }
            }
            if(isset($_GET['tglmsk'])){
                if($_GET['tglmsk'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'> Tanggal Masuk Sekolah Belum Di Isi !</h5>";
                }
            }
            if(isset($_GET['nis'])){
                if($_GET['nis'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'> NIS Belum Di Isi !</h5>";
                }
            }
            if(isset($_GET['nopeserta'])){
                if($_GET['nopeserta'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'> Nomor Peserta Ujian Belum Di Isi !</h5>";
                }
            }
            if(isset($_GET['paud'])){
                if($_GET['paud'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'> PAUD Belum Di Isi !</h5>";
                }
            }
            if(isset($_GET['tk'])){
                if($_GET['tk'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'> TK Belum Di Isi !</h5>";
                }
            }
            if(isset($_GET['skhun'])){
                if($_GET['skhun'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'> No SKHUN Belum Di Isi !</h5>";
                }
            }
            if(isset($_GET['ijazah'])){
                if($_GET['ijazah'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'> No Ijazah Belum Di Isi !</h5>";
                }
            }
            if(isset($_GET['hobi'])){
                if($_GET['hobi'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'> Hobi Belum Di Isi !</h5>";
                }
            }
            if(isset($_GET['cita'])){
                if($_GET['cita'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'> Cita - Cita Belum Di Isi !</h5>";
                }
            }
            
        ?>



    <div class="container">
        <h2 class="alert alert-primary text-center mt-3">FORMULIR PENDAFTARAN</h2>
            <center><?php echo date("Y/m/d")?></center>
            <h3 class="fw-bold">REGISTASI</h3>
        <FORM method="post" action="actionp1.php">
            <div class="form-group">
                <label>Jenis Pendaftaran</label>
                <div class="form-group col-md-3">
                    <input type="radio" class="form-check-input" id="validationFormCheck2" name="jenis_pendaftaran" value="Siswa Baru" required>
                    <label class="form-check-label" for="validationFormCheck2">Siswa Baru</label>
                    <br>
                    <input type="radio" class="form-check-input" id="validationFormCheck3" name="jenis_pendaftaran" value="Pindahan" required>
                    <label class="form-check-label" for="validationFormCheck3">Pindahan</label>
                </div>
            </div>

            <div class=" form-group row mb-4">
                <div class="col-md-4 ">
                    Tanggal Masuk Sekolah
                </div>
                <div class="col-md-2">
                    <input class="form-control" type="date" name="tglmsk">
                </div>
            </div>


            <div class="form-group">
                <label>NIS</label>
                <input type="text" name="nis" class="form-control" placeholder="NIS" required>
            </div>

            <div class="form-group">
                <label>NOMOR PESERTA UJIAN</label>
                <input type="text" name="nopeserta" class="form-control" placeholder="Nomor Peserta Ujian" required>
                <label style="font-style:italic; font-size:small">* Nomor peserta Ujian adalah 20 Digit yang tertera dalam sertifikat <span style="color: red; font-weight: bold; font-style:italic;">SKHUN SD</span>, diisi bagi peserta didik jenjang SMP </label>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>

            <div class="form-group">
                <label>Apakah Pernah PAUD</label>
                <div class="form-group col-md-3">
                    <input type="radio" class="form-check-input" name="paud" value="Ya" required>
                    <label class="form-check-label" for="validationFormCheck2">Ya</label>
                    <br>
                    <input type="radio" class="form-check-input" name="paud" value="Tidak" required>
                    <label class="form-check-label" for="validationFormCheck3">Tidak</label>
                </div>
            </div>

            <div class="form-group">
                <label>Apakah Pernah TK</label>
                <div class="form-group col-md-3">
                    <input type="radio" class="form-check-input" name="tk" value="Ya" required>
                    <label class="form-check-label" for="validationFormCheck2">Ya</label>
                    <br>
                    <input type="radio" class="form-check-input" name="tk" value="Tidak" required>
                    <label class="form-check-label" for="validationFormCheck3">Tidak</label>
                </div>
            </div>


            <div class="form-group">
                <label>No. Seri SKHUN Sebelumnya</label>
                <input type="text" name="skhun" class="form-control" placeholder="Nama Lengkap" required>
                <label style="font-style:italic; font-size:small">* Nomor peserta Ujian adalah 16 Digit yang tertera dalam sertifikat <span style="color: red; font-weight: bold; font-style:italic;">SKHUN SD</span>, diisi bagi peserta didik jenjang SMP </label>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>

            <div class="form-group">
                <label>No. Seri Ijazah Sebelumnya</label>
                <input type="text" name="ijazah" class="form-control" placeholder="Nama Lengkap" required>
                <label style="font-style:italic; font-size:small">* Nomor peserta Ujian adalah 16 Digit yang tertera dalam sertifikat <span style="color: red; font-weight: bold; font-style:italic;">Ijazah SD</span>, diisi bagi peserta didik jenjang SMP </label>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>

            <div class="form-group">
                <label>Hobi</label>
                <select name="hobi">
                    <option value="Olah Raga">Olah Raga</option>
                    <option value="Kesenian">Kesenian</option>
                    <option value="Membaca">Membaca</option>
                    <option value="Menulis">Menulis</option>
                    <option value="Travelin">Travelin</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
            </div>

            <div class="form-group">
                <label>Cita-Cita</label>
                <select name="cita">
                    <option value="PNS">PNS</option>
                    <option value="TNI/POLRI">TNI/POLRI</option>
                    <option value="Guru/Dosen">Guru/Dosen</option>
                    <option value="Dokter">Dokter</option>
                    <option value="Politikus">Politikus</option>
                    <option value="Seni/Lukis/Artis/Sejenis">Seni/Lukis/Artis/Sejenis</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
            </div>

            <label style="font-style:italic; font-size:small"><span style="color: red; font-weight: bold; font-style:italic;">* PASTIKAN SEMUA DATA YANG DIISI BENAR</span></label>

            <div class="form-group my-4">
                <button class="btn btn-primary form-control" type="submit" name="Submit">Next</button>
            </div>
            
        </FORM>
    </div>

    <script src=" jquery-3.6.3.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
</body>

</html>