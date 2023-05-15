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

            if(isset($_GET['nama_lengkap'])){
                if($_GET['nama_lengkap'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'>Nama Lengkap Belum Di Isi !</h5>";
                }
            }
            if(isset($_GET['jenis_kelamin'])){
                if($_GET['jenis_kelamin'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'>Jenis Kelamin Belum Di Isi !</h5>";
                }
            }
            if(isset($_GET['nisn'])){
                if($_GET['nisn'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'> NISN Belum Di Isi !</h5>";
                }
            }
            if(isset($_GET['nik'])){
                if($_GET['nik'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'> NIK Belum Di Isi !</h5>";
                }
            }
            if(isset($_GET['tgl_lahir'])){
                if($_GET['tgl_lahir'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'> Tanggal Lahir Belum Di Isi !</h5>";
                }
            }
            if(isset($_GET['tempat_lahir'])){
                if($_GET['tempat_lahir'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'> Tempat Lahir Belum Di Isi !</h5>";
                }
            }
            if(isset($_GET['agama'])){
                if($_GET['agama'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'> Agama Belum Di Isi !</h5>";
                }
            }
            if(isset($_GET['berkebutuhan_khusus'])){
                if($_GET['berkebutuhan_khusus'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'> Berkebutuhan Khusus Belum Di Isi !</h5>";
                }
            }
            if(isset($_GET['alamat_jalan'])){
                if($_GET['alamat_jalan'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'> Alamat Jalan Belum Di Isi !</h5>";
                }
            }
            if(isset($_GET['rt'])){
                if($_GET['rt'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'> RT Belum Di Isi !</h5>";
                }
            }
            if(isset($_GET['rw'])){
                if($_GET['rw'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'> RW Belum Di Isi !</h5>";
                }
            }
            if(isset($_GET['nama_dusun'])){
                if($_GET['nama_dusun'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'> Nama Dusun Belum Di Isi !</h5>";
                }
            }
            if(isset($_GET['nama_kelurahan_desa'])){
                if($_GET['nama_kelurahan_desa'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'> Nama Kelurahan Desa Belum Di Isi !</h5>";
                }
            }
            if(isset($_GET['kecamatan'])){
                if($_GET['kecamatan'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'> Kecamatan Belum Di Isi !</h5>";
                }
            }
            if(isset($_GET['kode_pos'])){
                if($_GET['kode_pos'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'> Kode Pos Belum Di Isi !</h5>";
                }
            }
            if(isset($_GET['tempat_tinggal'])){
                if($_GET['tempat_tinggal'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'> Tempat Tinggal Belum Di Isi !</h5>";
                }
            }
            if(isset($_GET['moda_transportasi'])){
                if($_GET['moda_transportasi'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'> Moda Transportasi Belum Di Isi !</h5>";
                }
            }
            if(isset($_GET['no_hp'])){
                if($_GET['no_hp'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'> No HP Belum Di Isi !</h5>";
                }
            }
            if(isset($_GET['no_telp'])){
                if($_GET['no_telp'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'> No Telp Belum Di Isi !</h5>";
                }
            }
            if(isset($_GET['email'])){
                if($_GET['email'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'> Email Belum Di Isi !</h5>";
                }
            }
            if(isset($_GET['penerima_kps_pkh_kip'])){
                if($_GET['penerima_kps_pkh_kip'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'> Penerima KPS/PKH/KIP Belum Di Isi !</h5>";
                }
            }
            if(isset($_GET['kewarganegaraan'])){
                if($_GET['kewarganegaraan'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'> Kewarganegaraan Belum Di Isi !</h5>";
                }
            }
        ?>



    <div class="container">
        <h2 class="alert alert-primary text-center mt-3">FORMULIR PENDAFTARAN</h2>
            <center><?php echo date("Y/m/d")?></center>
            <h3 class="fw-bold">DATA DIRI</h3>
        <FORM method="post" action="actionp2.php">
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap" required>
            </div>

            <div class="form-group">
                <label>Jenis Kelamin</label>
                <div class="form-group col-md-3">
                    <input type="radio" class="form-check-input" name="jenis_kelamin" value="Laki-Laki" required>
                    <label class="form-check-label" for="validationFormCheck1">Laki - Laki</label>
                    <br>
                    <input type="radio" class="form-check-input" name="jenis_kelamin" value="Perempuan" required>
                    <label class="form-check-label" for="validationFormCheck2">Perempuan</label>
                </div>
            </div>

            <div class="form-group">
                <label>NISN</label>
                <input type="text" name="nisn" class="form-control" placeholder="NISN" required>
            </div>

            <div class="form-group">
                <label>NIK</label>
                <input type="text" name="nik" class="form-control" placeholder="NIK" required>
            </div>

            <div class="form-group">
                <label>Tanggal lahir</label>
                <input type="text" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir" required>
            </div>

            <div class="form-group">
                <label>Tempat Lahir</label>
                <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" required>
            </div>

            <div class="form-group">
                <label>Agama</label>
                <select name="agama">
                                <option value="Islam">Islam</option>
                                <option value="Kristen/Protestan">Kristen/Protestan</option>
                                <option value="Katholik">Katholik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Khong Hu Chu">Khong Hu Chu</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
            </div>

            <div class="form-group">
                <label>Berkebutuhan Khusus</label>
                <select name="berkebutuhan_khusus">
                                <option value="Tidak">Tidak</option>
                                <option value="Netra">Netra</option>
                                <option value="Rungu">Rungu</option>
                                <option value="Grahita Ringan">Grahita Ringan</option>
                                <option value="Grahita Sedang">Grahita Sedang</option>
                                <option value="Daksa Ringan">Daksa Ringan</option>
                                <option value="Daksa Sedang">Daksa Sedang</option>
                                <option value="Laras">Laras</option>
                                <option value="Wicara">Wicara</option>
                                <option value="Tuna Ganda">Tuna Ganda</option>
                                <option value="Hiper Aktif">Hiper Aktif</option>
                                <option value="Cerdas Istimewa">Cerdas Istimewa</option>
                                <option value="Bakat Istimewa">Bakat Istimewa</option>
                                <option value="Kesulitan Belajar">Kesulitan Belajar</option>
                                <option value="Narkoba">Narkoba</option>
                                <option value="Indigo">Indigo</option>
                                <option value="Down Syndrome">Down Syndrome</option>
                                <option value="Autis">Autis</option>
                            </select>
            </div>

            <div class="form-group">
                <label>Alamat Jalan</label>
                <input type="text" name="alamat_jalan" class="form-control" placeholder="Alamat Jalan" required>
            </div>

            <div class="form-group">
                <label>RT</label>
                <input type="text" name="rt" class="form-control" placeholder="RT" required>
            </div>

            <div class="form-group">
                <label>RW</label>
                <input type="text" name="rw" class="form-control" placeholder="RW" required>
            </div>

            <div class="form-group">
                <label>Nama Dusun</label>
                <input type="text" name="nama_dusun" class="form-control" placeholder="Nama Dusun" required>
            </div>

            <div class="form-group">
                <label>Nama Kelurahan/Desa</label>
                <input type="text" name="nama_kelurahan_desa" class="form-control" placeholder="Nama Kelurahan/Desa" required>
            </div>

            <div class="form-group">
                <label>Kecamatan</label>
                <input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan" required>
            </div>

            <div class="form-group">
                <label>Kode Pos</label>
                <input type="text" name="kode_pos" class="form-control" placeholder="Kode Pos" required>
            </div>

            <div class="form-group">
                <label>Tempat Tinggal</label>
                <select name="tempat_tinggal">
                                <option value="Bersama Orang Tua"> Bersama Orang Tua </option>
                                <option value="Wali"> Wali</option>
                                <option value="Kos"> Kos</option>
                                <option value="Asrama"> Asrama</option>
                                <option value="Panti Asuhan"> Panti Asuhan</option>
                                <option value="Lainnya"> Lainnya</option>
                            </select>
            </div>

            <div class="form-group">
                <label>Moda Transportasi</label>
                <select name="moda_transportasi">
                                <option value="Jalan Kaki">Jalan Kaki</option>
                                <option value="Kendaraan Pribadi">Kendaraan Pribadi</option>
                                <option value="Kendaraan Umum">Kendaraan Umum</option>
                                <option value="Jempuran Sekolah">Jempuran Sekolah</option>
                                <option value="Kereta Api">Kereta Api</option>
                                <option value="Ojek">Ojek</option>
                                <option value="Ando/Bendi/Dokar/Becak">Ando/Bendi/Dokar/Becak</option>
                                <option value="Perahu Penyebrangan/Rakit/Gelek">Perahu Penyebrangan/Rakit/Gelek</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
            </div>

            <div class="form-group">
                <label>No Hp</label>
                <input type="text" name="no_hp" class="form-control" placeholder="No Hp" required>
            </div>

            <div class="form-group">
                <label>No Telp</label>
                <input type="text" name="no_telp" class="form-control" placeholder="No Telp" required>
            </div>

            <div class="form-group">
                <label>E-mail Pribadi</label>
                <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>

            <div class="form-group">
                <label>Penerima KPS/PHK/KIP</label>
                <div class="form-group col-md-3">
                    <input type="radio" class="form-check-input" id="validationFormCheck3" name="penerima_kps_pkh_kip" value="Ya" required>
                    <label class="form-check-label" for="validationFormCheck3">Ya</label>
                    <br>
                    <input type="radio" class="form-check-input" id="validationFormCheck4" name="penerima_kps_pkh_kip" value="Tidak" required>
                    <label class="form-check-label" for="validationFormCheck4">Tidak</label>
                </div>
            </div>

            <div class="form-group">
                <label>No KPS/KKS/PHK/KIP</label>
                <input type="text" name="no_penerima" class="form-control" placeholder="No KPS/KKS/PHK/KIP" required>
            </div>

            <div class="form-group">
                <label>Kewarganegaraan</label>
                <div class="form-group col-md-3">
                    <input type="radio" class="form-check-input" id="validationFormCheck5" name="kewarganegaraan" value="Indonesia(WNI)" required>
                    <label class="form-check-label" for="validationFormCheck5">Indonesia(WNI)</label>
                    <br>
                    <input type="radio" class="form-check-input" id="validationFormCheck6" name="kewarganegaraan" value="Asing(WNA)" required>
                    <label class="form-check-label" for="validationFormCheck6">Asing(WNA)</label>
                </div>
            </div>

            <div class="form-group">
                <label>Nama Negara</label>
                <input type="text" name="nama_negara" class="form-control" placeholder="Nama Negara" required>
                <label style="font-style:italic; font-size:small">*Diisi jika<span style="color: red; font-weight: bold; font-style:italic;"> warga negara asing</span></label>
            </div>
            <label style="font-style:italic; font-size:small"><span style="color: red; font-weight: bold; font-style:italic;">*PASTIKAN SEMUA DATA YANG DIISI BENAR</span></label>
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