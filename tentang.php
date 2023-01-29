<?php 
	include "koneksi.php";
 ?>

 <div class="jumbotron bg-primary text-light" style="padding: 20px 0; margin-top: 60px;">
	<div class="container text-center">
		<h2><b>Tentang Kami</b></h2>
	</div>
</div>

  <div class="container">
  	<?php 
  		$t = mysqli_query($koneksi, "select*from tentang");
  		$data = mysqli_fetch_array($t);

  		echo $data['tentang'];
  	 ?>

  </div>