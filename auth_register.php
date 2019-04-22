<?php
mysql_connect("localhost","root","");
mysql_select_db("dbmobster")or die (mysql_error());
	if(isset($_POST['Register'])){
		$kd_login=$_POST['kd_login'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$email=$_POST['email'];
		$level=$_POST['level'];
		// $password = md5($password);
	$sql=mysql_query("INSERT INTO `dbmobster`.`login` (`kd_login`, `username`, `password`, `email`, `level` ) VALUES ('$kd_login', '$username', '$password', '$email', '$level');");
	
	if($sql){
				?>
				<script language="javascript">
				alert("Pendaftaran Berhasil Silahkan Login!");
				window.history.back();
				</script>
                <?php		}
		else{
			?>
				<script language="javascript">
				alert("Pendaftaran Gagal!");
				</script>
                <?php
				die(mysql_error());
		}
		
	}

		
?>
