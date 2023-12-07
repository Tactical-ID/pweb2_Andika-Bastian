<?php

include_once '../../config.php';
include_once '../../controllers/JobController.php';
require '../../index.php';

error_reporting(E_ERROR | E_PARSE);

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $jobController=new JobController($db);
    $result=$jobController->deleteJob($id);

    if ($result) {
        header('Location:job');
    } else {
        echo "Gagal Menghapus Data";
    }
}