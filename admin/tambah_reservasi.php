<?php 
include 'config.php';
$kd_reservasi=$_POST['kd_reservasi'];
$kd_batch=$_POST['kd_batch'];
$tgl_reservasi=$_POST['tgl_reservasi'];
$keterangan=$_POST['keterangan'];
$sql = "insert into reservasi values('$kd_reservasi','$kd_batch','$tgl_reservasi','$keterangan')";
$hasil=mysql_query($sql,$link);
header("location:reservasi.php");
 ?>