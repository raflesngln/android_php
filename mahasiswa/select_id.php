<?php
        include "koneksi.php";

        //Mendapatkan Nilai npm
        $npm = $_POST['npm'];



        //Membuat SQL Query dengan pegawai yang ditentukan secara spesifik sesuai ID
        $sql = "SELECT * FROM mahasiswa WHERE npm='$npm'";

        //Mendapatkan Hasil
        $r = mysqli_query($con,$sql);

        //Memasukkan Hasil Kedalam Array
        $result = array();
        $row = mysqli_fetch_array($r);
        array_push($result,array(
                        "npm"=>$row['npm'],
                        "nama"=>$row['nama'],
                        "kelas"=>$row['kelas'],
                        "sesi"=>$row['sesi']
                ));

                //Menampilkan dalam format JSON
        //echo json_encode(array('result'=>$result));
$jumlah=mysqli_num_rows($r);

        if($jumlah >=1){
        echo json_encode(array("value"=>1,"result"=>$result,"jumlah"=>$jumlah));
        mysqli_close($con);
} else{
        echo json_encode(array("value"=>0,"result"=>'empty',"jumlah"=>$jumlah));
        mysqli_close($con);
}
?>
