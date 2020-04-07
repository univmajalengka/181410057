<?php 
$koneksi = mysqli_connect("localhost","root","","aset_bmck");

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>