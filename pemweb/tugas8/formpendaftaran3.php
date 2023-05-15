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

            if(isset($_GET['nama_ayah_kandung'])){
                if($_GET['nama_ayah_kandung'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'>Nama Ayah Kandung Belum Di Isi !</h5>";
                }
            }
            if(isset($_GET['tahun_lahir_ayah'])){
                if($_GET['tahun_lahir_ayah'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'>Tahun Lahir Ayah Belum Di Isi !</h5>";
                }
            }
            if(isset($_GET['pendidikan_ayah'])){
                if($_GET['pendidikan_ayah'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'> Pendidikan Ayah Belum Di Isi !</h5>";
                }
            }
            if(isset($_GET['pekerjaan_ayah'])){
                if($_GET['pekerjaan_ayah'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'> Pekerjaan Ayah Belum Di Isi !</h5>";
                }
            }
            if(isset($_GET['penghasilan_bulanan_ayah'])){
                if($_GET['penghasilan_bulanan_ayah'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'> Penghasilan Ayah Bulanan Belum Di Isi !</h5>";
                }
            }
            if(isset($_GET['berkebutuhan_khusus_ayah'])){
                if($_GET['berkebutuhan_khusus_ayah'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'> Berkebutuhan Khusus Ayah Belum Di Isi !</h5>";
                }
            }
            if(isset($_GET['nama_ibu_kandung'])){
                if($_GET['nama_ibu_kandung'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'>Nama Ibu Kandung Belum Di Isi !</h5>";
                }
            }
            if(isset($_GET['tahun_lahir_ibu'])){
                if($_GET['tahun_lahir_ibu'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'>Tahun Lahir Ibu Belum Di Isi !</h5>";
                }
            }
            if(isset($_GET['pendidikan_ibu'])){
                if($_GET['pendidikan_ibu'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'> Pendidikan Ibu Belum Di Isi !</h5>";
                }
            }
            if(isset($_GET['pekerjaan_ibu'])){
                if($_GET['pekerjaan_ibu'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'> Pekerjaan Ibu Belum Di Isi !</h5>";
                }
            }
            if(isset($_GET['penghasilan_bulanan_ibu'])){
                if($_GET['penghasilan_bulanan_ibu'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'> Penghasilan Ibu Bulanan Belum Di Isi !</h5>";
                }
            }
            if(isset($_GET['berkebutuhan_khusus_ibu'])){
                if($_GET['berkebutuhan_khusus_ibu'] == "kosong"){
                    echo "<h5 style='color:red; text-align:center;'> Berkebutuhan Khusus Ibu Belum Di Isi !</h5>";
                }
            }
        ?>

    <div class="container">
        <h2 class="alert alert-primary text-center mt-3">FORMULIR PENDAFTARAN</h2>
            <center><?php echo date("Y/m/d")?></center>
            <h3 class="fw-bold">DATA ORANG TUA</h3>
        <FORM method="post" action="actionp3.php">
        <h5 class="fw-bold">Data Ayah</h5>
        <div class="form-group">
                <label>Nama Ayah Kandung</label>
                <input type="text" name="nama_ayah_kandung" class="form-control" placeholder="Nama Ayah Kandung" required>
            </div>

            <div class="form-group">
                <label>Tahun Lahir</label>
                <input type="text" name="tahun_lahir_ayah" class="form-control" placeholder="Tahun Lahir" required>
            </div>

            <div class="form-group">
                <label>Pendidikan</label>
                <select name="pendidikan_ayah">
                                <option value="Tidak Sekolah">Tidak Sekolah</option>
                                <option value="Putus SD">Putus SD</option>
                                <option value="SD Sederajat">SD Sederajat</option>
                                <option value="SMP Sederajat">SMP Sederajat</option>
                                <option value="SMA Sederajat">SMA Sederajat</option>
                                <option value="D1">D1</option>
                                <option value="D2">D2</option>
                                <option value="D3">D3</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select>
            </div>

            <div class="form-group">
                <label>Pekerjaan</label>
                <select name="pekerjaan_ayah">
                                <option value="Tidak Bekerja">Tidak Bekerja</option>
                                <option value="Nelayan">Nelayan</option>
                                <option value="Petani">Petani</option>
                                <option value="Peternak">Peternak</option>
                                <option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
                                <option value="Karyawan Swasta">Karyawan Swasta</option>
                                <option value="Pedagang Kecil">Pedagang Kecil</option>
                                <option value="Pedagang Besar">Pedagang Besar</option>
                                <option value="Wiraswasta">Wiraswasta</option>
                                <option value="Wirausaha">Wirausaha</option>
                                <option value="Buruh">Buruh</option>
                                <option value="Pensiunan">Pensiunan</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                            </div>

                            <div class="form-group">
                            <label>Penghasilan Bulanan</label>
                            <select name="penghasilan_bulanan_ayah">
                                <option value="< 500.000"> < 500.000 </option>
                                <option value="500.000 - 999.999"> 500.000 - 999.999</option>
                                <option value="1 Juta - 1.999.999"> 1 Juta - 1.999.999</option>
                                <option value="2 Juta - 4.999.999"> 2 Juta - 4.999.999</option>
                                <option value="5 Juta - 20 Juta"> 5 Juta - 20 Juta </option>
                                <option value="Lebih dari 20 Juta"> Lebih dari 20 Juta</option>
                            </select>
                            </div>

                            <div class="form-group">
                            <label>Berkebutuhan Khusus</label>
                            <select name="berkebutuhan_khusus_ayah">
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

                            <h5 class="fw-bold">Data Ibu</h5>

                        
                <div class="form-group">
                <label>Nama IbuKandung</label>
                <input type="text" name="nama_ibu_kandung" class="form-control" placeholder="Nama Ayah Kandung" required>
            </div>

            <div class="form-group">
                <label>Tahun Lahir</label>
                <input type="text" name="tahun_lahir_ibu" class="form-control" placeholder="Tahun Lahir" required>
            </div>

            <div class="form-group">
                <label>Pendidikan</label>
                <select name="pendidikan_ibu">
                                <option value="Tidak Sekolah">Tidak Sekolah</option>
                                <option value="Putus SD">Putus SD</option>
                                <option value="SD Sederajat">SD Sederajat</option>
                                <option value="SMP Sederajat">SMP Sederajat</option>
                                <option value="SMA Sederajat">SMA Sederajat</option>
                                <option value="D1">D1</option>
                                <option value="D2">D2</option>
                                <option value="D3">D3</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select>
            </div>

            <div class="form-group">
                <label>Pekerjaan</label>
                <select name="pekerjaan_ibu">
                                <option value="Tidak Bekerja">Tidak Bekerja</option>
                                <option value="Nelayan">Nelayan</option>
                                <option value="Petani">Petani</option>
                                <option value="Peternak">Peternak</option>
                                <option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
                                <option value="Karyawan Swasta">Karyawan Swasta</option>
                                <option value="Pedagang Kecil">Pedagang Kecil</option>
                                <option value="Pedagang Besar">Pedagang Besar</option>
                                <option value="Wiraswasta">Wiraswasta</option>
                                <option value="Wirausaha">Wirausaha</option>
                                <option value="Buruh">Buruh</option>
                                <option value="Pensiunan">Pensiunan</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                            </div>

                            <div class="form-group">
                            <label>Penghasilan Bulanan</label>
                            <select name="penghasilan_bulanan_ibu">
                                <option value="< 500.000"> < 500.000 </option>
                                <option value="500.000 - 999.999"> 500.000 - 999.999</option>
                                <option value="1 Juta - 1.999.999"> 1 Juta - 1.999.999</option>
                                <option value="2 Juta - 4.999.999"> 2 Juta - 4.999.999</option>
                                <option value="5 Juta - 20 Juta"> 5 Juta - 20 Juta </option>
                                <option value="Lebih dari 20 Juta"> Lebih dari 20 Juta</option>
                            </select>
                            </div>

                            <div class="form-group">
                            <label>Berkebutuhan Khusus</label>
                            <select name="berkebutuhan_khusus_ibu">
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
                            <label style="font-style:italic; font-size:small"><span style="color: red; font-weight: bold; font-style:italic;">* PASTIKAN SEMUA DATA YANG DIISI BENAR</span></label>
                         <div class="form-group my-4">
                <button class="btn btn-primary form-control" type="submit" name="Submit">Submit</button>
            </div>

        </FORM>
    </div>

    <script src=" jquery-3.6.3.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
</body>

</html>