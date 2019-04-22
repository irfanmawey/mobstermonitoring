<?php 
include 'config.php';
if(isset($_POST['submit'])){
$kd_batch=$_POST['kd_batch'];
$nama_batch=$_POST['nama_batch'];
$nama_client=$_POST['nama_client'];
$isi=$_POST['isi'];
$jumlah_karakter=$_POST['jumlah_karakter'];
$masking=$_POST['masking'];
$lokasi=$_POST['lokasi'];
$tanggal=$_POST['tanggal'];
$jumlah_sms=$_POST['jumlah_sms'];
$nama_operator=$_POST['nama_operator'];
$sql = "insert into batch values('$kd_batch','$nama_batch','$nama_client','$isi','$jumlah_karakter', '$masking', '$lokasi', '$tanggal', '$jumlah_sms', '$nama_operator')";
$hasil=mysql_query($sql,$link);
header("location:batch.php");
}
 ?>