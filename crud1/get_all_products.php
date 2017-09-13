<?php

    include "db_config.php";
if($_SERVER['REQUEST_METHOD']=='GET') {
  $sql = "SELECT * FROM products  ORDER BY pid ASC";
  $res = mysqli_query($con,$sql);
  $result = array();
  while($row = mysqli_fetch_array($res)){
    array_push($result, array('pid'=>$row[0], 'name'=>$row[1], 'price'=>$row[2], 'description'=>$row[3], 'created_at'=>$row[4], 'updated_at'=>$row[5]));
  }

  if (mysqli_num_rows($res) > 0) {
     echo json_encode(array("success"=>1,"products"=>$result));
     mysqli_close($con);
  } else{
     echo json_encode(array("success"=>0,"message"=>'No products found'));
        mysqli_close($con);
  }
 
}
?>
