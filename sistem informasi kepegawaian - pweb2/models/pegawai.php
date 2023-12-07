<?php

class Pegawai
{
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi = $db;
    }

    public function getAllPegawai()
    {
        $query = "SELECT * FROM pegawai";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function createPegawai($nama,$NIP,$posisi,$awal_bekerja,$pass)
    {
        $query  = "INSERT INTO pegawai (nama,NIP,posisi,awal_bekerja,pass)
        values('$nama','$NIP','$posisi','$awal_bekerja','$pass')";
        $result  = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getPegawaiById($id)
    {
        $query = "SELECT * FROM pegawai WHERE NIP = '$id'";
        $result = mysqli_query($this->koneksi, $query);
        return mysqli_fetch_assoc($result);
    }

    public function updatePegawai($nama,$NIP,$posisi,$awal_bekerja,$pass)
    {
        $query = "UPDATE pegawai set nama='$nama', posisi='$posisi',awal_bekerja='$awal_bekerja',
        pass='$pass' where NIP='$NIP'";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function deletePegawai($id)
    {
        $query = "DELETE FROM pegawai WHERE NIP='$id'";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
