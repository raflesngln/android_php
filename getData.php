<?php 

	if($_SERVER['REQUEST_METHOD']=='GET'){
		
		$id  = $_GET['id'];
		//$id  = isset($_GET['id'])?$_GET['id']:'';

		if (isset($id)) {
			$where="where id='$id'";
		} else{
			$where= "where id >=1";
		}
		
		require_once('dbConnect.php');
		
		
		$sql = "SELECT * FROM ms_user $where";
		
		$r = mysqli_query($con,$sql);
		$data=array();
		while($res=mysqli_fetch_array($r)){
			$row=array(
			"id"=>$res['id'],
			"username"=>$res['username'],
			"password"=>$res['password'],
			"fullname"=>$res['fullname']
			);
			$data[]=$row;
		}
		

		
		echo json_encode($data);
		
		mysqli_close($con);
		
	}