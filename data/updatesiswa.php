<?php
	if($_SERVER['REQUEST_METHOD']=='POST'){
		//MEndapatkan Nilai Dari Variable
		$nis = $_POST['nis'];
		$suhu = $_POST['suhu'];

		//import file koneksi database
		require_once('../koneksi.php');

		//Membuat SQL Query
		$sql = "UPDATE catat SET suhu = '$suhu' WHERE nis = $nis;";

		//Meng-update Database
		if(mysqli_query($con,$sql)){
			echo 'Berhasil Update Data';
		}else{
			echo 'Gagal Update Data';
		}

		mysqli_close($con);
	}
?>
