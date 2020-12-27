<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<br/>
	<br/>
	<center><h2>WELCOME TO LOGIN</h2></center>
	<br/>
	<center>
	<div class="login">
	<br/>
		<form action="sesion.php" method="post" onSubmit="return validasi()">
			<div>
				<label>Username:</label>
				<input type="text" name="username" id="username" />
			</div>
			<div>
				<label>Password:</label>
				<input type="password" name="password" id="password" />
			</div>			
			<div>
				<input type="submit" value="Login" class="tombol">
			</div>
			<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login dulu";
		}
	}
	?>
		</form>
	</div>
</center>
</body>
 
<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password Tidak Boleh Kosong !');
			return false;
		}
	}
 
</script>
<p style="text-align: center; margin-top: 10px;">&copy;2020 by Andrean_Utama_Putra</p>
</html>