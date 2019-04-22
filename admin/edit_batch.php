<?php 
include 'header.php';
?>
<h3><span class="glyphicon glyphicon-briefcase"></span>  Edit Batch</h3>
<a class="btn" href="batch.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>
<?php
$kd_batch=mysql_real_escape_string($_GET['kd_batch']);
$det=mysql_query("select * from batch where kd_batch='$kd_batch'")or die(mysql_error());
while($d=mysql_fetch_array($det)){
?>									
	<form action="update_batch.php" method="post">
		<table class="table">
			<tr>
				<td></td>
				<td><input type="hidden" name="kd_batch" value="<?php echo $d['kd_batch'] ?>"></td>
			</tr>
			<tr>
				<td>Nama Batch</td>
				<td><input type="text" class="form-control" name="nama_batch" value="<?php echo $d['nama_batch'] ?>"></td>
			</tr>
			<tr>
				<td>Nama Client</td>
				<td><input type="date" class="form-control" name="nama_client" value="<?php echo $d['nama_client'] ?>"></td>
			</tr>
			<tr>
				<td>Isi</td>
				<td><input type="text" class="form-control" name="isi" value="<?php echo $d['isi'] ?>"></td>
			</tr>
			<tr>
				<td>Jumlah Karakter</td>
				<td><input type="text" class="form-control" name="jumlah_karakter" value="<?php echo $d['jumlah_karakter'] ?>"></td>
			</tr>
			<tr>
				<td>Masking</td>
				<td><input type="text" class="form-control" name="masking" value="<?php echo $d['masking'] ?>"></td>
			</tr>
			<tr>
				<td>Lokasi</td>
				<td><input type="text" class="form-control" name="lokasi" value="<?php echo $d['lokasi'] ?>"></td>
			</tr>
			<tr>
				<td>Tanggal</td>
				<td><input type="date" class="form-control" name="tanggal" value="<?php echo $d['tanggal'] ?>"></td>
			</tr>
			<tr>
				<td>Jumlah SMS</td>
				<td><input type="date" class="form-control" name="jumlah_sms" value="<?php echo $d['jumlah_sms'] ?>"></td>
			</tr>
			<tr>
				<td>Nama Operator</td>
				<td><input type="date" class="form-control" name="nama_operator" value="<?php echo $d['nama_operator'] ?>"></td>
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