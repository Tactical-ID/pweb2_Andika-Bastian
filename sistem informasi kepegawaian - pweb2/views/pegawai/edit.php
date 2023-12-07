<?php
include_once '../../config.php';
include_once '../../controllers/PegawaiController.php';
include_once '../../index.php';

// Mengabaikan atau menyembunyikan pesan warning
error_reporting(E_ERROR | E_PARSE);

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $pegawaiController = new PegawaiController($db);
    $pegawaiData = $pegawaiController->getPegawaiById($id);

    if ($pegawaiData) {
        if (isset($_POST['submit'])) {
            $NIP = $_POST['NIP'];
            $nama = $_POST['nama'];
            $posisi = $_POST['posisi'];
            $awal_bekerja = $_POST['awal_bekerja'];
            $pass = $_POST['pass'];

            $result = $pegawaiController->updatePegawai($nama, $NIP, $posisi, $awal_bekerja, $pass);

            if ($result) {
                header("location:pegawai");
            } else {
                header("location:edit");
            }
        }
    } else {
        echo "Dosen Tidak Ditemukan!";
    }
}
?>

<body>
    <div class="card px-3 py-3" style="margin: 25px auto; padding: 20px; max-width:400px">
        <h3 class="text-center">Edit Data Dosen</h3>
        <?php
        if ($pegawaiData) {
        ?>
            <form method="post" action="">
                <?php
                if ($pegawaiData) {
                ?>
                    <table>
                        <tr>
                            <td>NIP</td>
                            <td>
                                <input type="number" name="NIP" value="<?php echo $pegawaiData['NIP'] ?>" class="form-control" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>nama</td>
                            <td>
                                <input type="text" name="nama" value="<?php echo $pegawaiData['nama'] ?>" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>posisi</td>
                            <td>
                                <input type="text" name="posisi" value="<?php echo $pegawaiData['posisi'] ?>" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>bekerja sejak</td>
                            <td>
                                <input type="date" name="awal_bekerja" value="<?php echo $pegawaiData['awal_bekerja'] ?>" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>password</td>
                            <td>
                                <input type="password" name="pass" value="<?php echo $pegawaiData['pass'] ?>" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                            </td>
                        </tr>
                    <?php
                }
                    ?>
                    </table>
            </form>
        <?php
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>