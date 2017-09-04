<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//Mendapatkan Nilai Variable
		//$id  = $_POST['id'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$fullname = $_POST['fullname'];

		//Import File Koneksi database
		require_once('dbConnect.php');
		
		//Pembuatan Syntax SQL
		$sql = "INSERT INTO ms_user VALUES ('','$fullname','$username','$password')";
		
		
		
		//Meng-tambah Database 
		if(mysqli_query($con,$sql)){
			echo 'Berhasil tambah Data ';
		}else{
			echo 'Gagal tambah Data ';
		}
		
		mysqli_close($con);
	}
?>