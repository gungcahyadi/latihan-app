<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Belajar Jquery</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">


	<!-- Bootstrap core JavaScript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


	<!-- Bootstrap core CSS -->
	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">






	<script>
		$(document).ready(function(){

			$(".form-entri").on('click', function(){
				$("#iform").load("form_entri.php");
			});	


			$("#btn2").on('click', function(){
				$("#iform").load("form_list.php");
			});	


		})
	</script>






</head>

<body>
	<div class="container">
		<div class="row" style="padding-top: 20px;">
			<div class="col-sm-6 col-sm-offset-3" style="margin: auto;">


				<h1 class="text-center">Belajar JQUERY</h1>


				<hr>
					<table class="table table-responsive table-hover table-primary">
						<thead>
							<td>
								<div name="btn1" id="btn1" class="btn btn-info form-entri">FORM ENTRI</div>

								<div name="btn2" id="btn2" class="btn btn-info">LIST DATA</div>
							</td>		
						</thead>
					</table>

<div class="table-responsive">
				<table class="col-12 table" style="background-color: gray">
					<tbody>
						<td>
							<div id="ihasil"></div>
							<div id="iform" style="min-height: 300px">
								<?php 
								if(isset($_POST['tambah']))
								{
									include 'koneksi.php';

									if(! get_magic_quotes_gpc() )
									{
										$nama_karyawan = addslashes ($_POST['nama_karyawan']);
										$alm_karyawan = addslashes ($_POST['alm_karyawan']);
									}
									else
									{
										$nama_karyawan = $_POST['nama_karyawan'];
										$alm_karyawan = $_POST['alm_karyawan'];
									}
									$gaji_karyawan = $_POST['gaji_karyawan'];

									$sql = "INSERT INTO karyawan
									(nama_karyawan,alm_karyawan, gaji_karyawan, tgl_gabung)
									VALUES('$nama_karyawan','$alm_karyawan',$gaji_karyawan, NOW())";
									$tambahdata = mysqli_query( $koneksi, $sql  );
									if($tambahdata )
									{
										echo "<script>$('#iform').load('form_entri.php');alert('Sukses Input !').history.go(1);</script>";
									}
									else {
										echo "<script>$('#iform').load('form_entri.php');alert('Gagal Input !').history.go(1);</script>";
									}
									mysqli_close($koneksi);
								} ?>
								<?php
								if(isset($_POST['update']))
								{
									include 'koneksi.php';
									$id = $_POST['id_karyawan'];
									$nama = $_POST['nama_karyawan'];
									$alamat = $_POST['alm_karyawan'];
									$gaji = $_POST['gaji_karyawan'];

									$sql = "UPDATE karyawan
									SET gaji_karyawan = '$gaji', nama_karyawan = '$nama', alm_karyawan = '$alamat'
									WHERE id_karyawan = $id" ;

									$retval = mysqli_query( $koneksi,$sql );
									if($retval )
									{
										echo "<script>$('#iform').load('form_list.php');alert('Sukses update !').history.go(1);</script>";
									}else{
										echo "<script>$('#iform').load('form_list.php');alert('Gagal update !').history.go(1);</script>";
									}
									mysqli_close($conn);
								} ?>
								<?php 
								if(isset($_POST['hapus']))
								{
									include 'koneksi.php';
									$id_karyawan = $_POST['id_karyawan'];

									$sql = "DELETE FROM karyawan
									WHERE id_karyawan = $id_karyawan" ;
									$hapusdata = mysqli_query( $koneksi,$sql  );
									if( $hapusdata )
									{
										echo "<script>$('#iform').load('form_list.php');alert('Sukses delete !').history.go(1);</script>";
									}else {
										echo "<script>$('#iform').load('form_list.php');alert('Gagal delete !').history.go(1);</script>";

									}
									mysqli_close($koneksi);
								} ?>


							</div>

						</td>
					</tbody>
				</table>
			</div>
			</div>
		</div>
	</div>
</body>
</html>
