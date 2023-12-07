
<?php

include_once '../../config.php';
include_once '../../controllers/PegawaiController.php';

$database= new database();
$db=$database->getKoneksi();

if (isset($_POST['submit'])){
    $NIP = $_POST['NIP'];
    $nama = $_POST['nama'];
    $posisi = $_POST['posisi'];
    $awal_bekerja = $_POST['awal_bekerja'];
    $pass = $_POST['pass'];

    $pegawaiController= new PegawaiController($db);
    $result=$pegawaiController->createPegawai($nama,$NIP,$posisi,$awal_bekerja,$pass);

    if($result){
        header("Location:pegawai");
    }else{
        header("Location:tambah_dsn");
    }
}