<?php


if($_SERVER['REQUEST_METHOD']=='POST') {

   $response = array();
   //mendapatkan data
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];

   require_once('db_config.php');
  
   
     $sql2 = "INSERT INTO products(name, price, description) VALUES('$name', '$price', '$description')";
     $simpan = mysqli_query($con,$sql2);
     //echo json_encode(array("value"=>1,"message"=>'Sukses mendaftar'));
     if($simpan) {
       $response["success"] = 1;
       $response["message"] = 'Product successfully Insert';
       echo json_encode($response);
     } else {
       $response["success"] = 0;
       $response["message"] = "Oops! An error Insert data";
       echo json_encode($response);
     }
   
   // tutup database
   mysqli_close($con);
} else {
  $response["success"] = 0;
  $response["message"] = "Required field(s) is missing";
  echo json_encode($response);
}
?>