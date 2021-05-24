<?php
include "koneksi.php";
?>

<?php

$nama			= $_POST['nama'];
$tempat_lahir	= $_POST['tempat_lahir'];
$asal_sekolah	= $_POST['asal_sekolah'];
$no_hp			= $_POST['no_hp'];
$alamat	= $_POST['alamat'];

$query_insert= "INSERT INTO pendaftaran
(nama,tempat_lahir,asal_sekolah,no_hp,alamat)VALUES (
'$nama',
'$tempat_lahir',
'$asal_sekolah',
'$no_hp',
'$alamat')";


$query_insert_ok =mysqli_query($koneksi,$query_insert);

header("location: pendaftaran.php");

?> 