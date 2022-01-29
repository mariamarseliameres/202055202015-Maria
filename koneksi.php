<?php
$koneksi = mysqli_connect("localhost", "root", "", "202055202015_maria_marselia_meres");

if (mysqli_connect_errno()) {
	echo "koneksi Database Gagal:".mysqli_connect_errno();
}

?>