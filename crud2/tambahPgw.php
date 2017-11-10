<?php

 /*

 penulis: Muhammad yusuf
 website: http://www.kodingindonesia.com/

 */

	if($_SERVER['REQUEST_METHOD']=='POST'){

		//Import File Koneksi database
		require_once('koneksi.php');

		//Mendapatkan Nilai Variable
		$id = $_POST['id'];
		$name = $_POST['name'];
		$alamat = $_POST['alamat'];
		$jabatan = $_POST['jabatan'];

		//cek id sudah tersedia belum
		$sql = "SELECT * FROM tb_pegawai WHERE id=$id";
		$res = mysqli_query($con,$sql);
 		if (mysqli_num_rows($res) > 0) {
 			echo json_encode(array("success"=>0,"message"=>'Nomor ID sudah Tersedia di database,Input ID yg lain'));
 		} else{

		//Jika belum ada data di DB dengan ID ini
		$sql2 = "INSERT INTO tb_pegawai (id,nama,alamat,jabatan) VALUES ('$id','$name','$alamat','$jabatan')";
		//Eksekusi Query database
		if(mysqli_query($con,$sql2)){
			//echo 'Berhasil Menambahkan Pegawai';
			echo json_encode(array("success"=>1,"message"=>'Sukses simpan'));
		}else{
			//echo 'Gagal Menambahkan Pegawai';
			 echo json_encode(array("success"=>0,"message"=>'Gagal simpan'));
		}

		mysqli_close($con);
	}
}
?>
