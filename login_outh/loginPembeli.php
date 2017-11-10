
<div id="trace-page">  
<h1>Shipment Tracking </h1>
<hr class="line"/>
<div id="title-header"> 
        <h3>Please enter Master / House Number  below.</h3>
       <em> <p class="note">Note: Multiple search.Separate every data with ENTER ( One Per line / max 10 data ). </p>
       </em>
 
<form method="get" action="akses_login.php">
  <input name="usr" type="text" id="usr" value="" placeholder="usr" />
      <input name="pwd" type="text" id="pwd" value="" placeholder="pwd" />     
           
  <br style="clear:both" />       
<button type="submit" id="cari" name="" >Login</button>
  </form>
</div>
<?php 
error_reporting(0);

				$usr=$_GET['usr'];
				$pwd=$_GET['pwd'];
				
$url = "http://localhost/login.php?usr='$usr'&pwd='$pwd'";
              
				
				$jsonUrl = file_get_contents($url, False);
				$json_content = json_decode($jsonUrl, true);
				//print_r($json_content);
				  if(isset($json_content))
 				 {
						print_r($json_content);
						echo 'berhasil login';
				 } 
				 else
				 {
					 
					 echo 'gagal';
				 }