<?php 

	if($_SERVER['REQUEST_METHOD']=='GET'){
		
		$id  = isset($_GET['id'])?$_GET['id']:'';
		
		require_once('dbConnect.php');
		
		
		$sql = "SELECT * FROM user";
		
		$r = mysqli_query($con,$sql);
		$data=array();
		while($res=mysqli_fetch_array($r)){
			$row=array(
			"username"=>$res['username'],
			"password"=>$res['password'],
			"fullname"=>$res['fullname']
			);
			$data[]=$row;
		}
		

		
		echo json_encode($data);
		
		mysqli_close($con);
		
	}

	?>