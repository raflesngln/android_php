

<?php

$db_server="localhost";
$db_user="root";
$db_pass="";
$db="androidapp";

$con=mysqli_connect($db_server,$db_user,$db_pass,$db);

if(!$con){
	echo "connection error".mysqli_connect_error();
} else{
	echo "database succes connecting";
}
?>



