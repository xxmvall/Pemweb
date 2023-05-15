<?php 
    include 'koneksi.php';
    
    // Menyimpan data kedalam variabel terlebih dahulu
    $tgl = date("Y-m-d");
    $jenis_pendaftaran = $_POST['jenis_pendaftaran'];
    $tglmsk = $_POST['tglmsk'];
    $nis = $_POST['nis'];
    $nopeserta = $_POST['nopeserta'];
    $paud = $_POST['paud'];
    $tk = $_POST['tk'];
    $skhun = $_POST['skhun'];
    $ijazah = $_POST['ijazah'];
    $hobi = $_POST['hobi'];
    $cita = $_POST['cita'];

    // Query SQL untuk insert data ke tabel
    $query = "INSERT INTO rpd SET tgl='$tgl', jenis_pendaftaran='$jenis_pendaftaran', tglmsk='$tglmsk', nis='$nis', nopeserta='$nopeserta', paud='$paud', tk='$tk', skhun='$skhun', ijazah='$ijazah', hobi='$hobi', cita='$cita'";
    mysqli_query($koneksi, $query);

    header("location:formpendaftaran2.php");    
    
?>