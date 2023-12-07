
<?php

include_once '../../config.php';
include_once '../../controllers/JobController.php';

$database= new database();
$db=$database->getKoneksi();

if (isset($_POST['submit'])){
    $id = $_POST['id'];
    $job = $_POST['job'];
    $tanggal_pemberian = $_POST['tanggal_pemberian'];
    $deadline = $_POST['deadline'];

    $jobController= new JobController($db);
    $result=$jobController->createJob($id,$job,$tanggal_pemberian,$deadline);

    if($result){
        header("Location:job");
    }else{
        header("Location:tambah_dsn");
    }
}