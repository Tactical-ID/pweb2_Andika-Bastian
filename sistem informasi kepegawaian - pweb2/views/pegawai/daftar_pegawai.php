<?php
//memanggil class model database
include_once '../../config.php';
include_once '../../controllers/PegawaiController.php';
include_once '../../index.php';

//instansiasi class database
$database = new database;
$db = $database->getKoneksi();

$pegawaiController = new PegawaiController($db);
$pegawai = $pegawaiController->getAllPegawai();
?>

<div class="pagetitle">
  <h1>Daftar Pegawai</h1>
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
          <a href='tambah' class="btn btn-success">Tambah Data</a>
          

          <table class="table table-borderless datatables">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">NIP</th>
                <th scope="col">Posisi</th>
                <th scope="col">Bekerja sejak</th>
                <th scope="col">Pengajuan</th>

              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
                foreach ($pegawai as $x) {
                ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $x['nama'] ?></td>
                        <td><?php echo $x['NIP'] ?></td>
                        <td><?php echo $x['posisi'] ?></td>
                        <td><?php echo $x['awal_bekerja'] ?></td>
                        <td>
                    <a href="edit?id=<?php echo $x['NIP']; ?>" class="btn btn-warning btn-sm">edit</a>
                    <a href="hapus?id=<?php echo $x['NIP']; ?>" class="btn btn-danger btn-sm">hapus</a>
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
