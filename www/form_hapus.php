<h2 class="text-center text-white">HAPUS DATA</h2>

<hr>


	<form method="post" action="192.168.43.235/index.php">
	<?php include 'koneksi.php';
	$id = $_GET['id_karyawan'];
	$sql = "SELECT * FROM karyawan WHERE id_karyawan = '$id'";
	$result = mysqli_query($koneksi,$sql);
	$data = mysqli_fetch_array($result);
	?>

	<table class="table table-striped">
		<tr>
			<td>
				<input name="id_karyawan" type="hidden" id="id_karyawan" value="<?= $data['id_karyawan'] ?>">
				<p style="font-size: 18px; font-weight: 600;">
					Apakah Anda yakin akan menghapus data "<?= $data['nama_karyawan'] ?>" ...?
				</p>
				<p>
					<input name="hapus" id="btnHPS" type="submit" value="HAPUS" class="btn btn-danger">
				</p>

			</td>		
		</tr>
	</table>




</form>
