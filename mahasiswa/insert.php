<?php

if($_SERVER['REQUEST_METHOD']=='POST') {

   $response = array();
   //mendapatkan data
   $npm = $_POST['npm'];
   $nama = $_POST['nama'];
   $kelas = $_POST['kelas'];
   $sesi = 'Siang';//$_POST['sesi'];

   require_once('koneksi.php');
   //Cek npm sudah terdaftar apa belum
   $sql = "SELECT * FROM mahasiswa WHERE npm ='$npm'";
   $check = mysqli_fetch_array(mysqli_query($con,$sql));
   if(isset($check)){
     $response["value"] = 0;
     $response["message"] = "oops! NPM sudah terdaftar,coba yg nomor lain!";
     echo json_encode($response);
   } else {
     $sql2 = "INSERT INTO mahasiswa VALUES ('$npm','$nama','$kelas','$sesi')";
     $simpan = mysqli_query($con,$sql2);
     //echo json_encode(array("value"=>1,"message"=>'Sukses mendaftar'));
     if($simpan) {
       $response["value"] = 1;
       $response["message"] = "Sukses mendaftar";
       echo json_encode($response);
     } else {
       $response["value"] = 0;
       $response["message"] = "oops! Gagal simpan data!";
       echo json_encode($response);
     }
   }
   // tutup database
   mysqli_close($con);
} else {
  $response["value"] = 0;
  $response["message"] = "oops! Coba lagi!";
  echo json_encode($response);
}
?>