<?php
include"koneksi.php";

	if(isset($_POST['simpan'])){
		$nim= $_POST['nim'];
		$nama= $_POST['nama'];
		$alamat= $_POST['alamat'];
		$uang_jajan= $_POST['uang_jajan'];

		$sql = "INSERT INTO mahasiswa_202055202015(nim, nama, alamat, uang_jajan)VALUES('$nim', '$nama', '$alamat', '$uang_jajan')";

		if(mysqli_query($koneksi,$sql)){

			header('location:index.php');
		}else{
			echo "Maaf Proses Penyimpanan Data Tidak Berhasil";
		}

	}
?>




