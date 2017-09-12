<?php
 /*
 penulis: Muhammad yusuf
 website: http://www.kodingindonesia.com/

 Nama Database yang telah dibuat bernama "db_android"
 Jika database yang kalian buat tidak sama dengan yang dibuat oleh penulis maka ganti nama database
 sesuai dengan nama database yang kalian buat
 */

 //Mendefinisikan Konstanta
 define('HOST','116.206.197.194:23500');
 define('USER','wisnu');
 define('PASS','baldas');
 define('DB','test');

 //membuat koneksi dengan database
 $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');
 ?>
