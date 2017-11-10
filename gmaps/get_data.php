<?php

 /*

 penulis: Muhammad yusuf
 website: http://www.kodingindonesia.com/

 */

	//Import File Koneksi Database
	require_once('koneksi.php');

	//Membuat SQL Query
	$sql = "SELECT * FROM studio";

	//Mendapatkan Hasil
	$r = mysqli_query($con,$sql);

	//Membuat Array Kosong
	$result = array();

	while($row = mysqli_fetch_array($r)){

		//Memasukkan Nama dan ID kedalam Array Kosong yang telah dibuat
		array_push($result,array(
			"id"=>$row['id'],
			"nama"=>$row['nama'],
			"gambar"=>$row['gambar'],
			"alamat"=>$row['alamat'],
			"harga"=>$row['harga'],
			"jam"=>$row['jam'],
			"latitude"=>$row['latitude'],
			"longitude"=>$row['longitude'],
			"call"=>$row['call'],
			"alatmusik"=>$row['alatmusik'],
			"lastupdate"=>$row['lastupdate'],
			"ratingalamatmusik"=>$row['ratingalamatmusik'],
			"ratingrecording"=>$row['ratingrecording'],
			"ratingtempat"=>$row['ratingtempat']
		));
	}

	//Menampilkan Array dalam Format JSON
	echo json_encode($result);

	mysqli_close($con);
?>
