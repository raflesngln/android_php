<?php
 // define('HOST','116.206.197.194:23500');
 // define('USER','wisnu');
 // define('PASS','baldas');
 // define('DB','test');

  define('HOST','localhost');
 define('USER','root');
 define('PASS','');
 define('DB','androidapp');

 $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');

 ?>