	<?php include 'koneksi.php';
	$id = $_GET['id_karyawan'];
	$sql = "SELECT * FROM karyawan WHERE id_karyawan = '$id'";
	$result = mysqli_query($koneksi,$sql);
	$data = mysqli_fetch_array($result);
	?>
	<h2 class="text-center text-white">FORM EDIT</h2>
	<hr>
	<form method="post" action="192.168.43.235/index.php">
		<table class="table table-striped">
			<input name="id_karyawan" type="hidden" id="id_karyawan" value="<?= $data['id_karyawan'] ?>">
			<tr>
				<td class="col-3">Nama Karyawan</td>
				<td><input class="form-control" name="nama_karyawan" type="text" id="nama_karyawan" value="<?= $data['nama_karyawan'] ?>"></td>
			</tr>
			<tr>
				<td class="col-3">Alamat Karyawan</td>
				<td><input class="form-control" name="alm_karyawan" type="text" id="alm_karyawan" value="<?= $data['alm_karyawan'] ?>"></td>
			</tr>
			<tr>
				<td class="col-3">Gaji Karyawan</td>
				<td><input class="form-control" name="gaji_karyawan" type="text" id="gaji_karyawan " value="<?= $data['gaji_karyawan'] ?>"></td>
			</tr>
			<tr>
				<td class="col-3"> </td>
				<td>
					<input class="btn btn-primary form-entri" name="update" type="submit" id="tambah" value="Update Karyawan">
				</td>
			</tr>
		</table>
	</form>
