

<?php
	define('HOST','192.168.10.33');
	define('USER','rafles');
	define('PASS','12345');
	define('DB','androidapp');
	
	$con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');
	

if(!$con){
	echo "connection error".mysqli_connect_error();
} else{
	echo "database succes connecting";
}
?>


