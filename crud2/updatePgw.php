<?php

 /*

 penulis: Muhammad yusuf
 website: http://www.kodingindonesia.com/

 */
	if($_SERVER['REQUEST_METHOD']=='POST'){
		//MEndapatkan Nilai Dari Variable
		$id = $_POST['id'];
		$name = $_POST['name'];
		$desg = $_POST['desg'];
		$sal = $_POST['salary'];

		//import file koneksi database
		require_once('koneksi.php');

		//Cek data jika ada dengan ID
		$sql = "SELECT * FROM tb_pegawai WHERE id=$id";
			//Mendapatkan Hasil
			$r = mysqli_query($con,$sql);
		
		if (mysqli_num_rows($r) > 0) {
				//Membuat SQL Query
				$sql2 = "UPDATE tb_pegawai SET nama = '$name', posisi = '$desg', gajih = '$sal' WHERE id = $id;";
				//Meng-update Database
				if(mysqli_query($con,$sql2)){
					echo json_encode(array("success"=>1,"message"=>'Data Berhasil Update'));
				}else{
					echo json_encode(array("success"=>0,"message"=>'Data Gagal Update'));
				}
				mysqli_close($con);
		} else{
		    echo json_encode(array("success"=>0,"message"=>'Data Gagal Update'));
	}
}
?>
