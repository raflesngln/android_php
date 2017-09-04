<!DOCTYPE html>
<html>
<script src= "http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
<body>


<?php
include('indexx.php');
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

</body>
</html>
