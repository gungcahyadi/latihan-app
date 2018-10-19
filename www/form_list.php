<h2 class="text-center text-white">LIST DATA</h2>


<hr>
<style>
	.table.table-small th,
	.table.table-small td{
		padding: .5rem !important;
		font-size: .9rem !important;
	}
</style>
<div class="col-12">
	<table class="table table-striped table-small table-responsive table-hover table-condensed" style="overflow-x: scroll;">
		<thead>
			<th class="col-1">#</th>

			<th>
				NAMA
			</th>
			<th>
				ALAMAT
			</th>
			<th>
				GAJI
			</th>
		</thead>
		<?php include 'koneksi.php'; $sql = 'SELECT * FROM karyawan';
		$ambildata = mysqli_query( $koneksi, $sql);
		if(! $ambildata )
		{
			die('Gagal ambil data: ' . mysqli_error());
		}
		while($row = mysqli_fetch_array($ambildata))
			{ ?>




				<tr>
					<td class="col-1">
						<a class="btn btn-sm btn-warning" href="#" onclick="$('#iform').load('form_edit.php?id_karyawan=<?= $row['id_karyawan'] ?>');">EDIT</a>
						<br>
						<a class="btn btn-sm btn-danger" href="#" onclick="$('#iform').load('form_hapus.php?id_karyawan=<?= $row['id_karyawan'] ?>');">Hapus</a>
					</td>
					<td>
						<?= $row['nama_karyawan'] ?>
					</td>
					<td>
						<?= $row['alm_karyawan'] ?>
					</td>
					<td>
						<?= $row['gaji_karyawan'] ?>
					</td>
				</tr>


<?php } ?>

			</table>
</div>
		</form>
