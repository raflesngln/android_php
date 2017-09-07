<?php
	include "koneksi.php";
	
	//Mendapatkan Nilai nim
	$nim = $_POST['nim'];
	

	
	//Membuat SQL Query dengan pegawai yang ditentukan secara spesifik sesuai ID
	$sql = "SELECT * FROM mahasiswa WHERE nama LIKE '$nim%'";
	
	//Mendapatkan Hasil 
	$r = mysqli_query($con,$sql);
	
	//Memasukkan Hasil Kedalam Array
	$result = array();
	$row = mysqli_fetch_array($r);
	array_push($result,array(
			"nim"=>$row['nim'],
			"nama"=>$row['nama'],
			"kelas"=>$row['kelas'],
			"sesi"=>$row['sesi']
		));

	//Menampilkan dalam format JSON
	//echo json_encode(array('result'=>$result));
	echo json_encode(array("value"=>1,"result"=>$result));
	
	mysqli_close($con);
?>