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
            <th> <font color="white">User name </font> </th>
            <th> <font color="white"> Password</font> </th>
		</tr>

		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from admin");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['username']; ?></td>
				<td><?php echo $d['password']; ?></td>
				
			</tr>
			<?php 
		}
		?>
	</table>

	
</body>
</html>