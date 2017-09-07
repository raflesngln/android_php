<?php 

	if($_SERVER['REQUEST_METHOD']=='POST'){
		//Mendapatkan Nilai Variable
   $nim = $_POST['nim'];
   $nama = $_POST['nama'];
   $kelas = $_POST['kelas'];
   $sesi = $_POST['sesi'];
		
		//import file koneksi database 
		require_once('koneksi.php');
		
		//Membuat SQL Query
		$sql = "UPDATE mahasiswa SET nama = '$nama', kelas = '$kelas', sesi = '$sesi' WHERE nim ='$nim'";
		
		//Meng-update Database 
		if(mysqli_query($con,$sql)){
			echo json_encode(array("value"=>1,"message"=>'Data Terupdate'));
		}else{
			echo json_encode(array("value"=>0,"message"=>'Data Gagal Terupdate'));
		}
		
		mysqli_close($con);
	}




	
?>