<?php
	include "koneksi.php";
	
	//Mendapatkan Nilai npm
	$search = $_POST['search'];
	
		if($search==''){
			$sql = "SELECT * FROM mahasiswa";
		} else {
			$sql = "SELECT * FROM mahasiswa WHERE nama LIKE '$search%' OR npm LIKE '$search%'";
		}

	$res = mysqli_query($con,$sql);
	  $result = array();
	  while($row = mysqli_fetch_array($res)){
	    array_push($result, array('npm'=>$row[0], 'nama'=>$row[1], 'kelas'=>$row[2], 'sesi'=>$row[3]));
	  }
  echo json_encode(array("value"=>1,"result"=>$result));




	mysqli_close($con);
?>