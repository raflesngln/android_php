<?php


    if($_SERVER['REQUEST_METHOD']=='POST'){
        //Mendapatkan Nilai Variable
   $pid = $_POST['pid'];
   $name = $_POST['name'];
   $price = $_POST['price'];
   $description = $_POST['description'];
        
        //import file koneksi database 
        require_once('db_config.php');
        
        //Membuat SQL Query
        $sql = "UPDATE products SET name = '$name', price = '$price', description = '$description' WHERE pid = '$pid'";
        
        //Meng-update Database 
        if(mysqli_query($con,$sql)){
            echo json_encode(array("success"=>1,"message"=>'Product successfully updated'));
        }else{
            echo json_encode(array("success"=>0,"message"=>'Data Gagal Terupdate'));
        }
        
        mysqli_close($con);
    }

?>
