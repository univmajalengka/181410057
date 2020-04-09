<!DOCTYPE html>
<html>
<head>
	<body bgcolor="grey">
	<title>ASET BMCK</title>
</head>
<body>

	<h2>Dinas</h2>
	<table border="10">
		<p><a href="index.php"> << Kembali Beranda</a>
    <table align="left" border="3" cellpadding="10" cellspacing="1" width="800px">
		<tr bgcolor='Black'>
			<th><font color="white">NO</font></th>
			<th><font color="white">ID_DINAS</font></th>
			<th><font color="white">Nama</font></th>
			<th><font color="white">ALAMAT</font></th>
			<th><font color="white">LOGO</font></th>
		</tr>

		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from dinas");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['id_dinas']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
				<td><?php echo $d['logo']; ?></td>
			</tr>
			<?php 
		}
		?>
	</table>

	
</body>
</html>