<?php 

 /*
 
 penulis: Muhammad yusuf
 website: http://www.kodingindonesia.com/
 
 */
	
	//Mendapatkan Nilai Dari Variable ID Pegawai yang ingin ditampilkan
	$id = $_GET['id'];
	
	//Importing database
	require_once('dbConnect.php');
	
	//Membuat SQL Query dengan pegawai yang ditentukan secara spesifik sesuai ID
	$sql = "SELECT * FROM ms_user WHERE id=$id";
	
	//Mendapatkan Hasil 
	$r = mysqli_query($con,$sql);
	
	//Memasukkan Hasil Kedalam Array
	$result = array();
	$row = mysqli_fetch_array($r);
	array_push($result,array(
			"id"=>$row['id'],
			"username"=>$row['username'],
			"password"=>$row['password'],
			"fullname"=>$row['fullname']
		));

	//Menampilkan dalam format JSON
	echo json_encode(array('result'=>$result));
	
	mysqli_close($con);
?>