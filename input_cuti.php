<?php
session_start();
if (!isset($_SESSION['username'])){
        header("location:login.php?pesan=belum_login");
    }
 ?>
<?php
include "koneksi.php";

//echo "Hai, selamat datang ". $_SESSION['nama'];
if(isset($_POST['Save'])){
	$nama_karyawan=$_POST['nama_karyawan'];
	$posisi=$_POST['posisi'];
	$masa_cuti=$_POST['masa_cuti'];
	$berakhir=$_POST['berakhir'];
	$untuk=$_POST['untuk'];

$query=mysqli_query($koneksi,"insert into cuti(nama_karyawan,posisi,masa_cuti,berakhir,untuk)
value ('$nama_karyawan',
'$posisi','$masa_cuti','$berakhir','$untuk')");

if($query){
	header("location:tampil_cuti.php");
}else{
	echo mysqli_error();
}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>INPUT DATA CUTI KARYAWAN</title>
</head>
<div class="container">
<center>
<body>
<center>SILAHKAN ISI DATA YANG DIBUTUHKAN</center>
</body>
</html>
<form method ="POST">

<table border="1">
	<tr>
		<td>Nama</td>
		<td>Posisi</td>
		<td>Mulai Cuti</td>
		<td>Berakhir Cuti</td>
		<td>Cuti Untuk</td>
	</tr>
	<tr>
		<td><input type="text" name="nama_karyawan"></td>
		<td><select name="posisi">
			<option value="">-----Pilih-----</option>
			<option value="HRD">HRD</option>
			<option value="Produksi">Produksi</option>
			<option value="Marketing">Marketing</option>
			<option value="Sekertaris">Sekertaris</option>
		<td><input type="date" name="masa_cuti"></td>
		<td><input type="date" name="berakhir"></td>
		<td><select name="untuk">
			<option value="">-----Pilih-----</option>
			<option value="Nikah">Nikah</option>
			<option value="Haid">Haid</option>
			<option value="Melahirkan">Melahirkan</option>
			</center>
		</select>
	</td>
		

	</tr>
</table>
<td>
		<button><input type="submit" class="btn btn-primary"name="Save" value="Ajukan Cuti"></button>
		</td>
</div>
		
</form>
<center>
<button><a href="logout.php">Logout</a></button>
</center>
<?php
$_SESSION['jabatan']='HRD';
 ?>

