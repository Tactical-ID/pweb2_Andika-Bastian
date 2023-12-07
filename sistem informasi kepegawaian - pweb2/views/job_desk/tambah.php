<?php
require '../../index.php';
?>

<div class="container mt-5">
    
    <br/>
    <br/>
    <h3 class="text-center">TAMBAH DATA Job Desk</h3>
    <form method="post" action="tambah_aksi_job" class="mx-auto">
        <table class="mx-auto">
            <tr>            
                <td>id</td>
                <td><input class="ms-5 mb-2" type="number" name="id"></td>
            </tr>
            <tr>
                <td>job</td>
                <td><input class="ms-5 mb-2" type="text" name="job"></td>
            </tr>
            <tr>
                <td>tanggal pemberian</td>
                <td><input class="ms-5 mb-2" type="date" name="tanggal_pemberian"></td>
            </tr>
            <tr>
                <td>dead line</td>
                <td><input class="ms-5 mb-2" type="date" name="deadline"></td>
            </tr>
            <tr>
                <td></td>
                <td align="right"><input type="submit" name="submit" value="SIMPAN" class="btn btn-success"></td>
				<td><a href="daf_job.php" class="btn btn-primary">KEMBALI</a><td>
            </tr>        
        </table>
    </form>
</div>



