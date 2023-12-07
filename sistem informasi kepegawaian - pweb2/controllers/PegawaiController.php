<?php

include_once '../../models/pegawai.php';

class PegawaiController
{
    private $model;

    public function __construct($db)
    {
        $this->model = new Pegawai($db);
    }

    public function getAllPegawai()
    {
        return $this->model->getAllPegawai();
    }
    public function createPegawai($nama,$NIP,$posisi,$awal_bekerja,$pass)
    {
        return $this->model->createPegawai($nama,$NIP,$posisi,$awal_bekerja,$pass);
    }

    public function getPegawaiById($id)
    {
        return $this->model->getPegawaiById($id);
    }

    public function updatePegawai($nama,$NIP,$posisi,$awal_bekerja,$pass)
    {
        return $this->model->updatePegawai($nama,$NIP,$posisi,$awal_bekerja,$pass);
    }

    public function deletePegawai($id)
    {
        return $this->model->deletePegawai($id);
    }
}
