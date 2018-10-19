<?php
$dbhost = '192.168.43.235';
$dbuser = 'root';
$dbpass = '';
$dbname = 'db_app_simple';
$koneksi = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
if(! $koneksi )
{
  die('Gagal Koneksi: ' . mysqli_error());
}
?>
