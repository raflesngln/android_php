

<?php

$db_server="192.168.10.33";
$db_user="rafles";
$db_pass="12345";
$db="androidapp";

$con=mysqli_connect($db_server,$db_user,$db_pass,$db);

if(!$con){
	echo "connection error".mysqli_connect_error();
} else{
	echo "database succes connecting";
}
?>



