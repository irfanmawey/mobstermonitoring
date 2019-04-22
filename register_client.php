<?php include("config.php"); 
echo '<form action="auth_register.php" method="post">


<style type="text/css">
    #body-form {
        width:400px;
        margin:0 auto;
        margin-top:20px;
        border: 1px solid #0e90d2;
        text-align: center;
        background: #fff;
        box-shadow: 2px 2px 2px #999;
    }
    #title-form {
        width:100%;
        background:#0e90d2;
        margin:0;
        padding:10px 0;
        font-size: 16px;
        color: #fff;
    }
    .row {width:100%;margin-bottom:10px}
    .row:last-child {margin:0}
    form {padding:0px}
    form input {padding:10px; width: 90%}
    input[name="submit-btn"]{width: 20%;background-color: #0e90d2;border:none;color:#fff}
</style>
<div id="body-form">
<h2 id="title-form">
Register Client</h2>
<form>
<div class="row">
<tr>
								<h2><b>Id Client</b></td> <td><input type="text" name="kd_login" placeholder="Isi Id Client Anda" height="15"></h2>
							</tr>
							<tr>
								<h2><b>Username</b></td> <td><input type="text" name="username" placeholder ="Isi Username Anda"></h2>
							</tr>
							<tr>
							<h2><b>Password</b></td> <td><input type="password" name="password" placeholder ="Isi Katasandi Anda"></h2>
							</tr>
							<tr>
							<h2><b>Email</b></td> <td><input type="text" name="email" placeholder="Isi Email Anda"></h2>
							</tr>
							<tr>
							<h2><b>Level</b></td> <td><input type="text" name="level" readonly value="client"></h2>
							</tr>
							<tr>
							<td align="right" colspan="2">
									<h2><input type="submit" value="Register" name="Register"></h2>
								</td>
                                <p class="text-center">Sudah Memiliki Akun? <a href="login.php">Login Disini</a></p>
							</tr>

</div>
</form>';
?>