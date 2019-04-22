<?php 
include 'header.php';
?>

<h3><span class="glyphicon glyphicon-briefcase"></span>  Detail Buku</h3>
<a class="btn" href="buku.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>

<?php
$id_buku=mysql_real_escape_string($_GET['id_buku']);


$det=mysql_query("select * from buku where id_buku='$id_buku'")or die(mysql_error());
while($d=mysql_fetch_array($det)){
	?>					
	<table class="table">
		<tr>
			<td>Jenis Buku</td>
			<td><?php echo $d['jenis_buku'] ?></td>
		</tr>
		<tr>
			<td>Judul Buku</td>
			<td><?php echo $d['judul_buku'] ?></td>
		</tr>
		<tr>
			<td>Penerbit</td>
			<td><?php echo $d['penerbit'] ?></td>
		</tr>
			<td>Lokasi</td>
			<td><?php echo $d['lokasi'] ?></td>
		</tr>
	</table>
	<?php 
}
?>
<?php include 'footer.php'; ?>