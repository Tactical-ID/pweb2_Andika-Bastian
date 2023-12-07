<?php

class Job
{
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi = $db;
    }

    public function getAllJob()
    {
        $query = "SELECT * FROM job";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function createJob($id,$job,$tanggal_pemberian,$deadline)
    {
        $query  = "INSERT INTO job (id,job,tanggal_pemberian,deadline)
        values('$id','$job','$tanggal_pemberian','$deadline')";
        $result  = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getJobById($id)
    {
        $query = "SELECT * FROM job WHERE id = '$id'";
        $result = mysqli_query($this->koneksi, $query);
        return mysqli_fetch_assoc($result);
    }

    public function updateJob($id,$job,$tanggal_pemberian,$deadline)
    {
        $query = "UPDATE job set job='$job', tanggal_pemberian='$tanggal_pemberian',deadline='$deadline' where id='$id'";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteJob($id)
    {
        $query = "DELETE FROM job WHERE id='$id'";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
