<!DOCTYPE html>
<html>
<head>
	<body bgcolor="grey">
	<title>ASET BMCK</title>
</head>
<body>

	<h2>Barang 1</h2>
	<table border="10">
		<p><a href="index.php"> << Kembali Beranda</a>
    <table align="left" border="3" cellpadding="10" cellspacing="1" width="800px">

		<tr bgcolor='Black'>
			<th> <font color="white">NO </font></th>
			<th> <font color="white"> Kode 1</font></th>
			<th><font color="white">Nama </font></th>
		</tr>

		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from brg1");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['kode_1']; ?></td>
				<td><?php echo $d['nama']; ?></td>
			</tr>
			<?php 
		}
		?>
	</table>

	
</body>
</html>