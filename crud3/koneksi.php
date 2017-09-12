<?php
	
	//$server		= "localhost"; // sesuaikan alamat server anda
	//$user		= "root"; // sesuaikan user web server anda
	//$password	= ""; // sesuaikan password web server anda
	//$database	= "androidapp"; // sesuaikan database web server anda

	$server		= '116.206.197.194:23500'; // sesuaikan alamat server anda
	$user		= 'wisnu'; // sesuaikan user web server anda
	$password	= 'baldas'; // sesuaikan password web server anda
	$database	= 'test'; // sesuaikan database web server anda


	
	$connect = mysql_connect($server, $user, $password) or die ("Koneksi gagal!");
	mysql_select_db($database) or die ("Database belum siap!");
?>