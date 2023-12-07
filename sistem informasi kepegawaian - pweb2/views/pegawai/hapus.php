<?php

include_once '../../config.php';
include_once '../../controllers/PegawaiController.php';
require '../../index.php';

error_reporting(E_ERROR | E_PARSE);

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $pegawaiController=new PegawaiController($db);
    $result=$pegawaiController->deletePegawai($id);

    if ($result) {
        header('Location:pegawai');
    } else {
        echo "Gagal Menghapus Data";
    }
}