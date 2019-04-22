<?php 
include 'config.php';
$kd_batch=$_POST['kd_batch'];
$nama_batch=$_POST['nama_batch'];
$nama_client=$_POST['nama_client'];
$isi=$_POST['isi'];
$jumlah_karakter=$_POST ['jumlah_karakter'];
$masking=$_POST ['masking'];
$lokasi=$_POST ['lokasi'];
$tanggal=$_POST ['tanggal'];
$jumlah_sms=$_POST ['jumlah_sms'];
$nama_operator=$_POST ['nama_operator'];

mysql_query("update batch set nama_batch='$nama_batch', nama_client='$nama_client', isi='$isi', jumlah_karakter='$jumlah_karakter', masking='$masking', lokasi='$lokasi', tanggal='$tanggal', jumlah_sms='$jumlah_sms', nama_operator='$nama_operator' where kd_batch='$kd_batch'");
header("location:batch.php");

?>