<!DOCTYPE html>
<html>
<head>
	<body bgcolor="grey">
	<title>ASET BMCK</title>
</head>
<body>

<h2>Atribut</h2>
	<table border="10">
		<p><a href="index.php"> << Kembali Beranda</a>
    <table align="left" border="3" cellpadding="10" cellspacing="1" width="1200px">

		
		<tr bgcolor='Black'>
			<th> <font color="white"> NO </font> </th>
            <th> <font color="white"> Id </font> </th>
            <th> <font color="white"> Dinas </font> </th>
            <th> <font color="white"> Kabupaten_dinas </font> </th>
            <th> <font color="white"> Alamat </font> </th>
            <th> <font color="white"> Web </font> </th>
            <th> <font color="white"> Kota </font> </th>
            <th> <font color="white"> Tgl </font> </th>
            <th> <font color="white"> Nama ttd </font> </th>
            <th> <font color="white"> Nip </font> </th>
		</tr>

		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from atribut");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['id']; ?></td>
				<td><?php echo $d['dinas']; ?></td>
				<td><?php echo $d['kabupaten_dinas']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
				<td><?php echo $d['web']; ?></td>
				<td><?php echo $d['kota']; ?></td>
				<td><?php echo $d['tgl']; ?></td>
				<td><?php echo $d['nama_ttd']; ?></td>
				<td><?php echo $d['nip']; ?></td>
			</tr>
			<?php 
		}
		?>
	</table>

	
</body>
</html>