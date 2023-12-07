<?php

include_once '../../models/job.php';

class JobController
{
    private $model;

    public function __construct($db)
    {
        $this->model = new Job($db);
    }

    public function getAllJob()
    {
        return $this->model->getAllJob();
    }
    public function createJob($id,$job,$tanggal_pemberian,$deadline)
    {
        return $this->model->createJob($id,$job,$tanggal_pemberian,$deadline);
    }

    public function getJobById($id)
    {
        return $this->model->getJobById($id);
    }

    public function updateJob($id,$job,$tanggal_pemberian,$deadline)
    {
        return $this->model->updateJob($id,$job,$tanggal_pemberian,$deadline);
    }

    public function deleteJob($id)
    {
        return $this->model->deleteJob($id);
    }
}
