

<?php

$db_server="10.0.0.28";
$db_user="wisnu";
$db_pass="baldas";
$db="test";

$con=mysqli_connect($db_server,$db_user,$db_pass,$db);

if(!$con){
	echo "connection error".mysqli_connect_error();
} else{
	return true;
	//echo "database succes connecting";
}
?>



