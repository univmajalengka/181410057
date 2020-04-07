<!DOCTYPE html>
<html>
<head>
	<title>ASET BMCK</title>
</head>
<body>

	<h2>ASET BMCK</h2>
	<table border="10">

		<tr>
			<th>NO</th>
			<th>ID_DINAS</th>
			<th>Nama</th>
			<th>ALAMAT</th>
			<th>LOGO</th>
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