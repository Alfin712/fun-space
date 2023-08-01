<?php

 //Mendapatkan Nilai nis
 $nis = $_GET['nis'];

 //Import File Koneksi Database
 require_once('../koneksi.php');

 //Membuat SQL Query
 $sql = "DELETE FROM catat WHERE nis=$nis;";


 //Menghapus Nilai pada Database
 if(mysqli_query($con,$sql)){
 echo 'Berhasil Menghapus Data';
 }else{
 echo 'Gagal Menghapus Data';
 }

 mysqli_close($con);
 ?>
