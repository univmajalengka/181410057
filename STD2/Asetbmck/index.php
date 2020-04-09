<!DOCTYPE html>
<head>
    <body bgcolor="grey">
    <title>Aset_bmck</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1 align="center">ASET BMCK</h1>
    <h3 align="center">Silahkan Pilih List Menu Dibawah Ini Sesuai yang anda perlukan</h3>
    <table align="left" border="3" cellpadding="10" cellspacing="1" width="800px">
        <tr>
        <tr bgcolor='Black'>
            <th> <font color="white">NO </font> </th>
            <th> <font color="white"> LIST MENU </font> </th>
        <tr>
            <th><?php $no = 1; echo $no++; ?></th>
            <th><a href="admin.php">Data admin</a></th>
        </tr>
        <tr>
            <th><?php echo $no++; ?></th>
            <th><a href="atribut.php">Atribut</a></th>
        </tr>
         <tr>
            <th><?php echo $no++; ?></th>
            <th><a href="barang.php">Barang</a></th>
        </tr>
         <tr>
            <th><?php echo $no++; ?></th>
            <th><a href="brg1.php">Barang 1</a></th>
        </tr>>
         <tr>
            <th><?php echo $no++; ?></th>
            <th><a href="brg2.php">Barang 2</a></th>
        </tr>>
         <tr>
            <th><?php echo $no++; ?></th>
            <th><a href="dinas.php">Dinas</a></th>
        </tr>>
         <tr>
            <th><?php echo $no++; ?></th>
            <th><a href="ruang.php">Ruang</a></th>
    </table>
</body>
</html>