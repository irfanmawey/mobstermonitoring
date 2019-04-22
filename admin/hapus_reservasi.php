<?php 
include 'config.php';
$kd_reservasi=$_GET['kd_reservasi'];
mysql_query("delete from reservasi where kd_reservasi='$kd_reservasi'");
header("location:reservasi.php");

?>