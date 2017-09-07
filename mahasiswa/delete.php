<?php 

 //Mendapatkan Nilai ID
 $npm = $_POST['npm'];
 
 //Import File Koneksi Database
 require_once('koneksi.php');
 
 //Membuat SQL Query
 $sql = "DELETE FROM mahasiswa WHERE npm='$npm'";

 
 //Menghapus Nilai pada Database 
 if(mysqli_query($con,$sql)){
 	echo json_encode(array("value"=>1,"message"=>'Data Terhapus'));
 }else{
 	echo json_encode(array("value"=>1,"message"=>'Data Gagal Terhapus'));
 }
 
 mysqli_close($con);
 ?>