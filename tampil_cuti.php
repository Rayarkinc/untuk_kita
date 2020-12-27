<?php
include "koneksi.php";
session_start();
if (!isset($_SESSION['username'])){
        header("location:login.php?pesan=belum_login");
    }
?>
<h2> DAFTAR CUTI KARYAWAN </h2>
<table border="1">
	<tr>
		<td>No</td>
		<td>Nama Karyawan</td>
		<td>Posisi</td>
		<td>Mulai Cuti</td>
		<td>Berakhir Cuti</td>
		<td>Cuti Untuk</td>
		<td>Status</td>
	</tr>
	<?php
		$no=1;
		$query=mysqli_query($koneksi,"select * from cuti");
		while ($list_cuti=mysqli_fetch_array($query)) {
			# code...
		
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $list_cuti['nama_karyawan'];?></td>
		<td><?php echo $list_cuti['posisi'];?></td>
		<td><?php echo $list_cuti['masa_cuti'];?></td>
		<td><?php echo $list_cuti['berakhir'];?></td>
		<td><?php echo $list_cuti['untuk'];?></td>
		<td>Menunggu Persetujuan</td>
	</tr>
<?php } ?>
</table>
<button> <a href="input_cuti.php">Back</button>
<button> <a href="logout.php">Logout</button>