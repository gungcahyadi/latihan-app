<?php if(isset($_POST['update']))
	{
		include 'koneksi.php';
 
	$id = $_POST['id_karyawan'];
	$nama = $_POST['gaji_karyawan'];
	$alamat = $_POST['gaji_karyawan'];
	$gaji = $_POST['gaji_karyawan'];
 
	$sql = "UPDATE karyawan
		   SET gaji_karyawan = $gaji
		   WHERE id_karyawan = $id" ;
 
	$retval = mysqli_query( $koneksi,$sql );
	if(! $retval )
	{
	  die('Tidak bisa update data: ' . mysql_error());
	}
	echo "Updated data sukses\n";
	mysqli_close($conn);
	} ?>