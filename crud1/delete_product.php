<?php



 //Mendapatkan Nilai ID
 $pid = $_POST['pid'];
 
 //Import File Koneksi Database
 require_once('db_config.php');
 
 $sql = "SELECT *FROM products WHERE pid = '$pid'";
 $r = mysqli_query($con,$sql);

if(mysqli_num_rows($r) >0 ){
    $sql2 = "DELETE FROM products WHERE pid = '$pid'";
    $del=mysqli_query($con,$sql2);
    echo json_encode(array("success"=>1,"message"=>'Data deleted'));
 }else{
    echo json_encode(array("success"=>0,"message"=>'Error deleted'));
 }
 
 mysqli_close($con);
?>