<?php
include_once '../../config.php';
include_once '../../controllers/JobController.php';
include_once '../../index.php';

// Mengabaikan atau menyembunyikan pesan warning
error_reporting(E_ERROR | E_PARSE);

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $jobController = new JobController($db);
    $jobData = $jobController->getJobById($id);

    if ($jobData) {
        if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $job = $_POST['job'];
        $tanggal_pemberian = $_POST['tanggal_pemberian'];
        $deadline = $_POST['deadline'];

            $result = $jobController->updateJob($id,$job,$tanggal_pemberian,$deadline);

            if ($result) {
                header("location:job");
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
        <h3 class="text-center">Edit Data job desk</h3>
        <?php
        if ($jobData) {
        ?>
            <form method="post" action="">
                <?php
                if ($jobData) {
                ?>
                    <table>
                    <tr>			
                        <td>id</td>
                        <td><input class="ms-5 mb-2" type="number" name="id" value="<?php echo $jobData['id'] ?>" class="form-control" readonly></td>
                    </tr>
                    <tr>
                        <td>job</td>
                        <td><input class="ms-5 mb-2" type="text" name="job" value="<?php echo $jobData['job'] ?>" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>tanggal pemberian</td>
                        <td><input class="ms-5 mb-2" type="date" name="tanggal_pemberian" value="<?php echo $jobData['tanggal_pemberian'] ?>" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>deadline</td>
                        <td><input class="ms-5 mb-2" type="date" name="deadline" value="<?php echo $jobData['deadline'] ?>" class="form-control"></td>
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