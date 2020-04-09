<!DOCTYPE html>
<html>
<head>
	<body bgcolor="grey">
	<title>ASET BMCK</title>
</head>
<body>

		<h2>Barang</h2>
	<table border="10">
		<p><a href="index.php"> << Kembali Beranda</a>
    <table align="left" border="3" cellpadding="10" cellspacing="1" width="800px">

		
		<tr bgcolor='Black'>
			<th>  <font color="white"> NO </font></th>
			<th>  <font color="white">Id barang </font></th>
			<th>  <font color="white">Kode barang1 </font></th>
			<th>  <font color="white">kode barang2 </font></th>
			<th>  <font color="white">Kode barang4 </font></th>
			<th>  <font color="white">Kode bgb </font></th>
			<th> <font color="white">Nama barang </font></th>
			<th>  <font color="white">Merk </font></th>
			<th> <font color="white">Nilai aset</font></th>
			<th>  <font color="white">Letak </font></th>
			<th>  <font color="white">Kondisi </font></th>
			<th>  <font color="white">Asal perolehan</font></th>
			<th>  <font color="white">Tahun dapat</font></th>
			<th> <font color="white">Tanggal_buku</font></th>

		</tr>

		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from barang");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['id_barang']; ?></td>
				<td><?php echo $d['kd_brg1']; ?></td>
				<td><?php echo $d['kd_brg2']; ?></td>
				<td><?php echo $d['kd_brg4']; ?></td>
				<td><?php echo $d['kd_bgb']; ?></td>
				<td><?php echo $d['nama_barang']; ?></td>
				<td><?php echo $d['merk']; ?></td>
				<td><?php echo $d['nilai_aset']; ?></td>
				<td><?php echo $d['letak']; ?></td>
				<td><?php echo $d['kondisi']; ?></td>
				<td><?php echo $d['asal_perolehan']; ?></td>
				<td><?php echo $d['thn_dapat']; ?></td>
				<td><?php echo $d['tgl_buku']; ?></td>
			</tr>
			<?php 
		}
		?>
	</table>

	
</body>
</html>