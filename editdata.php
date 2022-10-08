<?php
	include "connection.php";

	$id = $_POST['id_mahasiswa'];
	$nama_mahasiswa = $_POST['nama'];
	$nim = $_POST['nim'];
	$alamat = $_POST['alamat'];

	$update = mysqli_query($connect,"UPDATE t_mahasiswa set nama_mahasiswa='$nama_mahasiswa', nim='$nim', alamat='$alamat' where id_mahasiswa='$id'") or die (mysqli_error($connect));
	if ($update) {
		echo "<script>alert('Data berhasil diedit');location.href='data_mahasiswa.php';</script>";
	}else{
		echo "<script>alert('Data gagal diedit');location.href='data_mahasiswa.php';</script>";
	}
?>