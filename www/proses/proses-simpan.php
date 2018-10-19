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
if(! $tambahdata )
{
  die('Gagal Tambah Data: ' . mysqli_error());
}
echo "Berhasil tambah data\n";
mysqli_close($koneksi);
} ?>