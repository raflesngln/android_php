<?php

 /*

 penulis: Muhammad yusuf
 website: http://www.kodingindonesia.com/

 */

	//Mendapatkan Nilai Dari Variable ID Pegawai yang ingin ditampilkan
	$id = $_POST['id'];

	//Importing database
	require_once('koneksi.php');

	//Membuat SQL Query dengan pegawai yang ditentukan secara spesifik sesuai ID
	$sql = "SELECT * FROM tb_pegawai WHERE id=$id";
	//Mendapatkan Hasil
	$r = mysqli_query($con,$sql);
	if (mysqli_num_rows($r) > 0) {
			//Memasukkan Hasil Kedalam Array
				$result = array();
				$row = mysqli_fetch_array($r);
				array_push($result,array(
						"id"=>$row['id'],
						"name"=>$row['nama'],
						"alamat"=>$row['alamat'],
						"status"=>$row['status'],
						"jabatan"=>$row['jabatan']
					));
				//Menampilkan dalam format JSON
				echo json_encode(array("success"=>1,"message"=>'Data Ditemukan','result'=>$result));
				mysqli_close($con);

	} else{

		echo json_encode(array("success"=>0,"message"=>'Data Tidak ditemukan'));
	}
?>
