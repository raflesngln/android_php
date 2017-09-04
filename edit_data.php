<?php 

	if($_SERVER['REQUEST_METHOD']=='POST'){
		//Mendapatkan Nilai Variable
		$id  = $_POST['id'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$fullname = $_POST['fullname'];
		
		//import file koneksi database 
		require_once('dbConnect.php');
		
		//Membuat SQL Query
		$sql = "UPDATE ms_user SET username = '$username', password = '$password', fullname = '$fullname' WHERE id ='$id'";
		
		//Meng-update Database 
		if(mysqli_query($con,$sql)){
			echo 'Berhasil Update Data ';
		}else{
			echo 'Gagal Update Data ';
		}
		
		mysqli_close($con);
	}
?>