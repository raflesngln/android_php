

<?php
	define('HOST','localhost');
	define('USER','root');
	define('PASS','');
	define('DB','androidapp');
	
	$con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');
	

$con=mysqli_connect($db_server,$db_user,$db_pass,$db);

if(!$con){
	echo "connection error".mysqli_connect_error();
} else{
	echo "database succes connecting";
}
?>


