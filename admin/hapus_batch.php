<?php 
include 'config.php';
$kd_batch=$_GET['kd_batch'];
mysql_query("delete from batch where kd_batch='$kd_batch'");
header("location:batch.php");

?>