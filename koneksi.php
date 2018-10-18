<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'db_app_simple';
$koneksi = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
if(! $koneksi )
{
  die('Gagal Koneksi: ' . mysqli_error());
}
?>
