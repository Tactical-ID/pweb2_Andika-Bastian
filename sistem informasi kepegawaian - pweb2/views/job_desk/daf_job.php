<?php
//memanggil class model database
include_once '../../config.php';
include_once '../../controllers/JobController.php';
include_once '../../index.php';

//instansiasi class database
$database = new database;
$db = $database->getKoneksi();

$jobController = new JobController($db);
$job = $jobController->getAllJob();
?>

<div class="pagetitle">
  <h1>Daftar job desk</h1>
  <nav>
    <ol class="breadcrumb">

    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
  <div class="row">

    <!-- Recent Sales -->
    <div class="col-12">
      <div class="card">

        <div class="card-body">
          <a href='tambah_job' class="btn btn-success">Tambah Data</a>
          

          <table class="table table-borderless datatables">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">id</th>
                <th scope="col">job</th>
                <th scope="col">tanggal diberikan</th>
                <th scope="col">deadline</th>

              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
                foreach ($job as $x) {
                ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $x['id'] ?></td>
                        <td><?php echo $x['job'] ?></td>
                        <td><?php echo $x['tanggal_pemberian'] ?></td>
                        <td><?php echo $x['deadline'] ?></td>
                        <td>
                    <a href="edit_job?id=<?php echo $x['id']; ?>" class="btn btn-warning btn-sm">edit</a>
                    <a href="hapus_job?id=<?php echo $x['id']; ?>" class="btn btn-danger btn-sm">hapus</a>
                  </td>
                </tr>
              <?php
              }
              ?>
            </tbody>
          </table>

        </div>

      </div>

    </div>
  </div><!-- End Left side columns -->
</div>
</section>

</main><!-- End #main -->
