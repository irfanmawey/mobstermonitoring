<!DOCTYPE html>
<html>
<head>
	<title>MOBSTER | Mobile Blaster</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<b><a class="btn btn-info btn-xl js-scroll-trigger" href="index.php">Back to Home</a></b>
</head>
<body>
 
	<h1> <br/> MOBILE BLASTER </h1>
 
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
 
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
 
		<form action="cek_login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username" required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password" required="required">
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
			<center>
				  <p class="text-center">Belum punya akun? <a href="register_client.php">Daftar</a></p>
			</center>
		</form>
		
	</div>
 
 
</body>
</html>