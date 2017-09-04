<?php 

	if($_SERVER['REQUEST_METHOD']=='GET'){
		
		$username  = isset($_GET['username'])?$_GET['username']:'';
		$password  = isset($_GET['password'])?$_GET['password']:'';
		
		require_once('dbConnect.php');
		
		
		$sql = "SELECT * FROM ms_user where UserName='$username' AND Password='$password'";
		
		$r = mysqli_query($con,$sql);
		$data=array();
		while($res=mysqli_fetch_array($r)){
			$row=array(
			"username"=>$res['UserName'],
			"pasword"=>$res['Password'],
			"fullname"=>$res['FullName']
			);
			$data[]=$row;
		}
		

		
		echo json_encode($data);
		echo '<br/>berhasil login';
		
		mysqli_close($con);
		
	}