<?php include 'header.php';
include 'config.php'; ?>

<h3><span class="glyphicon glyphicon-briefcase"></span>  Batch Data</h3>
<button  data-toggle="modal" data-target="#myModal" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span>Tambah Pengajuan</button>
<br/>
<br/>
<!-- <?php 
$per_hal=10;
$jumlah_record=mysql_query("SELECT COUNT(*) from buku");
$jum=mysql_result($jumlah_record, 0);
$halaman=ceil($jum / $per_hal);
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $per_hal;
?> -->
<div class="col-md-12">
	<table class="col-md-2">
		<tr>
			<td>Jumlah Record</td>		
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
</form>
<br/>
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data Pengajuan
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Kode Batch</th>
                                            <th>Nama Batch</th>
                                            <th>Nama Client</th>
                                            <th>Isi SMS</th>
                                            <th>Jumlah Karakter</th>
                                            <th>Masking</th>
                                            <th>Lokasi</th>
                                            <th>Tanggal</th>
                                            <th>Jumlah SMS</th>
                                            <th>Nama Operator</th>
                                        </tr>
                                    </thead>
                                    <tbody>

	<?php 
	if(isset($_GET['cari'])){
		$cari=mysql_real_escape_string($_GET['cari']);
		$mhs=mysql_query("select * from batch where nama_client like '$cari' or kd_batch like '$cari'");
	}else{
		$mhs=mysql_query("select * from batch limit $start, $per_hal");
	}
	$nm=1;
	while($b=mysql_fetch_array($mhs)){
		?>
		<tr>
			<td align="center"><?php echo $b['kd_batch'] ?></td>
			<td align="center"><?php echo $b['nama_batch']?></td>
			<td align="center"><?php echo $b['nama_client'] ?></td>
			<td align="center"><?php echo $b['isi'] ?></td>
			<td align="center"><?php echo $b['jumlah_karakter'] ?></td>
			<td align="center"><?php echo $b['masking']?></td>
			<td align="center"><?php echo $b['lokasi'] ?></td>
			<td align="center"><?php echo $b['tanggal'] ?></td>
			<td align="center"><?php echo $b['jumlah_sms'] ?></td>
			<td align="center"><?php echo $b['nama_operator'] ?></td>

			<!-- <td align="center">
				<a href="detail.php?kd_batch=<?php echo $b['kd_batch']; ?>" class="btn btn-info">Detail</a>
				
			</td> -->
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
				<form action="tambah_pengajuan.php" method="post">
				<div class="form-group">
						<label>Kode Batch</label>
						<input name="kd_batch" type="text" class="form-control" placeholder="Isi Kode Batch" required="">
					</div>
					<div class="form-group">
						<label>Nama Batch</label>
						<input name="nama_batch" type="text" class="form-control" placeholder="Isi Nama Batch" required="">
					</div>
					<div class="form-group">
						<label>Nama Client</label>
						<input name="nama_client" type="text" class="form-control" placeholder="Isi Nama Client" required="">
					</div>
					<div class="form-group">
						<label>Isi SMS : </label></br>
						<textarea name="isi" rows="4" cols="70" required=""></textarea>
					</div>
					<div class="form-group">
						<label>Jumlah Karakter</label>
						<input name="jumlah_karakter" type="text" class="form-control" placeholder="Jumlah Karakter" required="">
						 <p class="text-center">Cek Jumlah Karakter? <a href="http://id.wordcounter360.com/" target="_blank">Disini</a></p>
					</div>
					<div class="form-group">
						<label>Masking</label>
						<input name="masking" type="text" class="form-control" placeholder="Masking" required="">
					</div>
					<div class="form-group">
						<label>Lokasi</label>
						<input name="nama_client" type="text" class="form-control" placeholder="Isi Nama Client" required="">
					</div>
				<div class="form-group">
                                            <label>Tanggal Input</label>
                                            <input class="form-control" name="tanggal" type="date" />
                                           
                                        </div>
                    <div class="form-group">
						<label>Jumlah SMS</label>
						<input name="jumlah_sms" type="text" class="form-control" placeholder="Jumlah SMS">
					</div>
					<div class="form-group">
						<label>Nama Operator</label>
						<select class="form-control" name="nama_operator">
							<option value="Telkomsel">Telkomsel</option>
							<option value="XL">XL</option>
							<option value="Indosat">Indosat</option>
						</select>
					</div>
				<div class="modal-footer">
				
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<input TYPE="submit" NAME="submit"  VALUE="Simpan" onclick='return window.confirm("Apa Anda Yakin Ingin Mengajukan Reservasi Ini?");'>
					
				
					
				</div>
			</form>
		</div>
	</div>
</div>



<?php 
include 'footer.php';

?>