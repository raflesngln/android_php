<?php 

	if($_SERVER['REQUEST_METHOD']=='POST'){
		//Mendapatkan Nilai Variable
   $npm = $_POST['npm'];
   $nama = $_POST['nama'];
   $kelas = $_POST['kelas'];
   $sesi = 'Siangs';//$_POST['sesi'];
		
		//import file koneksi database 
		require_once('koneksi.php');
		
		//Membuat SQL Query
		$sql = "UPDATE mahasiswa SET nama = '$nama', kelas = '$kelas', sesi = '$sesi' WHERE npm ='$npm'";
		
		//Meng-update Database 
		if(mysqli_query($con,$sql)){
			echo json_encode(array("value"=>1,"message"=>'Data Terupdate'));
		}else{
			echo json_encode(array("value"=>0,"message"=>'Data Gagal Terupdate'));
		}
		
		mysqli_close($con);
	}

?>