<?php
require '../../index.php';
?>

	
	<br/>
	<br/>
	<h3 class="text-center">TAMBAH DATA pegawai</h3>
	<form method="post" action="tambah_aksi" class="mx-auto">
        <table class="mx-auto">
			<tr>			
				<td>NIP</td>
				<td><input class="ms-5 mb-2" type="text" name="NIP"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input class="ms-5 mb-2" type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Posisi</td>
				<td><input class="ms-5 mb-2" type="text" name="posisi"></td>
			</tr>
			<tr>
				<td>Bekerja Sejak</td>
				<td><input class="ms-5 mb-2" type="date" name="awal_bekerja"></td>
			</tr>
            <tr>
				<td>Password</td>
				<td><input class="ms-5 mb-2" type="text" name="pass"></td>
			</tr>
			<tr>
				<td></td> 
				<td align="right"><input type="submit" name="submit"value="SIMPAN" class="btn btn-success"	></td>
				<td><a href="daftar_pegawai.php" class="btn btn-primary">KEMBALI</a><td>
			</tr>		
		</table>
	</form>




