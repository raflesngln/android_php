<?php

       include "db_config.php";

        //Mendapatkan Nilai npm
        $pid = $_GET['pid'];



        //Membuat SQL Query dengan pegawai yang ditentukan secara spesifik sesuai ID
        $sql = "SELECT *FROM products WHERE pid = '$pid'";

        //Mendapatkan Hasil
        $r = mysqli_query($con,$sql);

        //Memasukkan Hasil Kedalam Array
        $result = array();
        $row = mysqli_fetch_array($r);
        array_push($result,array(
                        "pid"=>$row['pid'],
                        "name"=>$row['name'],
                        "price"=>$row['price'],
                        "description"=>$row['description'],
                        "created_at"=>$row['created_at'],
                        "updated_at"=>$row['updated_at']
                ));

                //Menampilkan dalam format JSON
        //echo json_encode(array('result'=>$result));
$jumlah=mysqli_num_rows($r);

        if($jumlah >=1){
        echo json_encode(array("success"=>1,"product"=>$result,"jumlah"=>$jumlah));
        mysqli_close($con);
} else{
        echo json_encode(array("success"=>0,"message"=>'No product found',"jumlah"=>$jumlah));
        mysqli_close($con);
}
?>