<!DOCTYPE html>
<html>
<head>
	<body bgcolor="grey">
	<title>ASET BMCK</title>
</head>
<body>

	<h2>Ruang</h2>
	<table border="10">
		<p><a href="index.php"> << Kembali Beranda</a>
    <table align="left" border="3" cellpadding="10" cellspacing="1" width="800px">

		<tr bgcolor='Black'>
			<th> <font color="white">NO</font></th>
			<th> <font color="white">Id ruang</font></th>
			<th> <font color="white">Nama ruang </font></th>
			<th> <font color="white">Kondisi</font></th>
			<th> <font color="white">luas</font></th>
			<th> <font color="white">tanggung jawab</font></th>
		</tr>

		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from ruang");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['id_ruang']; ?></td>
				<td><?php echo $d['nama_ruang']; ?></td>
				<td><?php echo $d['kondisi']; ?></td>
				<td><?php echo $d['luas']; ?></td>
				<td><?php echo $d['tngg_jawab']; ?></td>


			</tr>
			<?php 
		}
		?>
	</table>

	
</body>
</html>