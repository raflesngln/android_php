<?php 


		
		$id  = isset($_GET['id'])?$_GET['id']:'';
		
		require_once('dbConnect.php');
		$username = $_POST['username']; 
		$password = $_POST['password']; 

		$us='rafles';
		$ps='12345';
		
		$sql = "SELECT * FROM user where username='$us' AND password='$ps'";
		
		$r = mysqli_query($con,$sql);
		$jum=mysqli_num_rows($r);
		if($jum > 0){
			echo 'ada data';
		} else {
			echo "gagal";
		}
		

		
		
	?>