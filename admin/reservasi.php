<?php include 'header.php'; ?>

<h3><span class="glyphicon glyphicon-briefcase"></span>  Data Reservasi</h3>
<button style="margin-bottom:20px" data-toggle="modal" data-target="#myModal" class="btn btn-info col-md-2"><span class="glyphicon glyphicon-plus"></span>Tambah Reservasi</button>
<br/>
<br/>
<!-- <?php 
$per_hal=10;
$jumlah_record=mysql_query("SELECT COUNT(*) from reservasi");
$jum=mysql_result($jumlah_record, 0);
$halaman=ceil($jum / $per_hal);
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $per_hal;
?> -->
<!-- <div class="col-md-12">
	<table class="col-md-2">
		<tr>
			<td>Jumlah Buku</td>		
			<td><?php echo $jum; ?></td>
		</tr>
		<tr>
			<td>Jumlah Halaman</td>	
			<td><?php echo $halaman; ?></td>
		</tr>
	</table>
	<a style="margin-bottom:10px" href="lap_buku.php" target="_blank" class="btn btn-default pull-right"><span class='glyphicon glyphicon-print'></span>  Cetak</a>
</div>
<form action="cari_act.php" method="get">
	<div class="input-group col-md-5 col-md-offset-7">
		<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-search"></span></span>
		<input type="text" class="form-control" placeholder="Cari buku di sini .." aria-describedby="basic-addon1" name="cari">	
	</div>
</form> -->
<br/>
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data Reservasi
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Kode Reservasi</th>
                                            <th>Kode Batch</th>
                                            <th>Tanggal Reservasi</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>

	 <?php 
	if(isset($_GET['cari'])){
		$cari=mysql_real_escape_string($_GET['cari']);
		$mhs=mysql_query("select * from reservasi where kd_reservasi like '$cari' or kd_batch like '$cari'");
	}else{
		$mhs=mysql_query("select * from reservasi limit $start, $per_hal");
	}
	$nm=1;
	while($b=mysql_fetch_array($mhs)){
		?> 
		<tr>
			<td><?php echo $b['kd_reservasi'] ?></td>
			<td><?php echo $b['kd_batch']?></td>
			<td><?php echo $b['tgl_reservasi'] ?></td>
			<td><?php echo $b['keterangan'] ?></td>
			<td>
<!-- 				<a href="detail_batch.php?kd_batch=<?php echo $b['kd_batch']; ?>" class="btn btn-info">Detail</a>
 -->				<a href="edit_reservasi.php?kd_reservasi=<?php echo $b['kd_reservasi']; ?>" class="btn btn-warning">Edit</a>
				<a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='hapus_reservasi.php?kd_reservasi=<?php echo $b['kd_reservasi']; ?>' }" class="btn btn-danger">Hapus</a>
			</td>
		</tr>		
		<?php 
	}
	?>
</table>
<ul class="pagination">			
			<?php 
			for($x=1;$x<=$halaman;$x++){
				?>
				<li><a href="?page=<?php echo $x ?>"><?php echo $x ?></a></li>
				<?php
			}
			?>						
		</ul>
<!-- modal input -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Reservasi</h4>
			</div>
			<div class="modal-body">
				<form action="tambah_reservasi.php" method="post">
				<div class="form-group">
						<label>Kode Reservasi</label>
						<input name="kd_reservasi" type="text" class="form-control" placeholder="Isi Kode Reservasi" required="">
					</div>
					<div class="form-group">
						<label>Kode Batch</label>
						<?php
						echo "<select name='kd_batch'>";
						$tampil=mysql_query("SELECT * FROM batch ORDER BY 1");
						echo "<option value='belum milih' selected>- Pilih Kode Batch -</option>";
						while($w=mysql_fetch_array($tampil))
						{
						echo "<option value='$w[kd_batch]' selected>$w[kd_batch]</option>";        	
						}
						echo "</select>";
						?>
					</div>
					<div class="form-group">
                        <label>Tanggal Reservasi</label>
                        <input class="form-control" name="tgl_reservasi" type="date" />
                                           
                    </div>
					<div class="form-group">
						<label>Keterangan</label>
						<input name="keterangan" type="text" class="form-control" placeholder="Isi Keterangan" required="">
					</div>
					<div class="modal-footer">
				
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<input TYPE="submit" NAME="submit"  VALUE="Simpan" onclick='return window.confirm("Apa Anda Yakin ?");'>
				</div>



<?php 
include 'footer.php';

?>