<?php 
include 'header.php';
?>
<h3><span class="glyphicon glyphicon-briefcase"></span>  Edit Reservasi</h3>
<a class="btn" href="reservasi.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>
<?php
$kd_reservasi=mysql_real_escape_string($_GET['kd_reservasi']);
$det=mysql_query("select * from reservasi where kd_reservasi='$kd_reservasi'")or die(mysql_error());
while($d=mysql_fetch_array($det)){
?>					
	<form action="update_reservasi.php" method="post">
		<table class="table">
			<tr>
				<td></td>
				<td><input type="hidden" name="kd_reservasi" value="<?php echo $d['kd_reservasi'] ?>"></td>
			</tr>
			<tr>
				<td>Kode Batch</td>
				<td><input type="text" class="form-control" name="kd_batch" value="<?php echo $d['kd_batch'] ?>"></td>
			</tr>
			<tr>
				<td>Tanggal Reservasi</td>
				<td><input type="date" class="form-control" name="tgl_reservasi" value="<?php echo $d['tgl_reservasi'] ?>"></td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td><input type="text" class="form-control" name="keterangan" value="<?php echo $d['keterangan'] ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" class="btn btn-info" value="Simpan"></td>
			</tr>
		</table>
	</form>
	<?php 
}
?>
<?php include 'footer.php'; ?>