

<?php

$db_server="116.206.197.194:23500";
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



