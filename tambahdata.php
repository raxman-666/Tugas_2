<?php
	if($_POST){
		$nama_mahasiswa = $_POST['nama'];
		$nim = $_POST['nim'];
		$alamat = $_POST['almat'];
		$username = $_POST['user'];
		$password = $_POST['pass'];

		if (empty($nama_mahasiswa)) {
			echo "<script>alert('Nama mahasiswa tidak boleh kosong');location.href='tambah.php';</script>";
		}elseif (empty($nim)) {
			echo "<script>alert('NIM mahasiswa tidak boleh kosong');location.href='tambah.php';</script>";
		}elseif (empty($alamat)) {
			echo "<script>alert('Alamat mahasiswa tidak boleh kosong');location.href='tambah.php';</script>";
		}elseif (empty($username)) {
			echo "<script>alert('Username tidak boleh kosong');location.href='tambah.php';</script>";
		}elseif (empty($password)) {
			echo "<script>alert('Password tidak boleh kosong');location.href='tambah.php';</script>";
		}else{
			include "connection.php";
			$insert = mysqli_query($connect,"iNSERT INTO t_mahasiswa (nama_mahasiswa, nim, alamat, username, password)
				value ('".$nama_mahasiswa."','".$nim."','".$alamat."','".$username."','".$password."')") or die (mysqli_error($connect));
			if ($insert) {
				echo "<script>alert('Data berhasil ditambahkan');location.href='data_mahasiswa.php';</script>";
			}else{
				echo "<script>alert('Data gagal ditambahkan');location.href='tambah.php';</script>";
			}
		}
	}
?>