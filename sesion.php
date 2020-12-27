<?php 
include 'koneksi.php';
 
$username = $_POST['username'];
$password = md5($_POST['password']);
 
$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);
 
if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['jabatan'] = $jabatan;
	$_SESSION['nama'] = $nama;
	header("location:input_cuti.php");
	
}else{	

	header("location:login.php?pesan=gagal");
	
	
}
 
?>