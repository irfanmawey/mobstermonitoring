<?php 
include 'header.php';
?>

<?php
$a = mysql_query("select * from buku");
?>

<div class="col-md-10">
	<h3>Selamat datang</h3>	
</div>
<!-- kalender -->
<div class="pull-right">
	<div id="kalender"></div>
</div>



<?php 
include 'footer.php';

?>