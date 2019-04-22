<?php 
include 'config.php';
$kd_reservasi=$_POST['kd_reservasi'];
$kd_batch=$_POST['kd_batch'];
$tgl_reservasi=$_POST['tgl_reservasi'];
$keterangan=$_POST['keterangan'];

mysql_query("update reservasi set kd_batch='$kd_batch', tgl_reservasi='$tgl_reservasi', keterangan='$keterangan'  where kd_reservasi='$kd_reservasi'");
header("location:reservasi.php");

?>