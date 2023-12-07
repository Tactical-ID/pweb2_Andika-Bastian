<?php

class HomeController{
    public function home(){
        header("Location:http://localhost/sistem%20informasi%20kepegawaian%20-%20pweb2/as.php");
    }
    public function pegawai(){
        header("Location:http://localhost/sistem%20informasi%20kepegawaian%20-%20pweb2/views/pegawai/daftar_pegawai.php");
    }
    public function tambah(){
        header("Location:http://localhost/sistem%20informasi%20kepegawaian%20-%20pweb2/views/pegawai/tambah.php");
    }
    public function tambah_aksi(){
        header("Location:http://localhost/sistem%20informasi%20kepegawaian%20-%20pweb2/views/pegawai/tambah_aksi.php");
    }
    public function edit(){
        header("Location:http://localhost/sistem%20informasi%20kepegawaian%20-%20pweb2/views/pegawai/edit.php");
    }
    public function hapus(){
        header("Location:http://localhost/sistem%20informasi%20kepegawaian%20-%20pweb2/views/pegawai/hapus.php");
    }
}