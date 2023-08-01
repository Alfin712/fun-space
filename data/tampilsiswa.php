<?php

	//Mendapatkan Nilai Dari Variable ID Siswa yang ingin ditampilkan
	$id = $_GET['id'];

	//Importing database
	require_once('koneksi.php');

	//Membuat SQL Query dengan Siswa yang ditentukan secara spesifik sesuai ID
	$sql = "SELECT * FROM catat WHERE id=$id";

	//Mendapatkan Hasil
	$r = mysqli_query($con,$sql);

	//Memasukkan Hasil Kedalam Array
	$result = array();
	$row = mysqli_fetch_array($r);
	array_push($result,array(
			"id"=>$row['id'],
			"suhu"=>$row['suhu'],
		));

	//Menampilkan dalam format JSON
	echo json_encode(array('result'=>$result));

	mysqli_close($con);
?>
