<?php 
	include "koneksi.php";
	$cari = $_GET['cari'];
	$q = mysqli_query($koneksi, "select*from produk where merk like '%$cari%'");
 ?>

 <div class="jumbotron bg-primary text-light" style="padding: 30px 0; margin-top: 40px;">
	<div class="container text-center">
		<h2>Pencarian Produk</h2>
		Ditemukan Total <b><?php echo mysqli_num_rows($q); ?>Produk</b>
		Dengan Kata <b>"<?php echo $cari; ?>"</b>
	</div>
</div>


 <!-- Produk Baru -->
  	<div class="w3-row mx-auto container">

		<?php 
	      while ($data = mysqli_fetch_array($q)) {

	      	if ($data ['gambar1'] == "") {
				$data ['gambar1'] = "produk4.jpg";
			}
	 	  ?>

			<div class="w3-col l3 s6" align="center">
				<div class="card mt-4" style="width: 97%;">
				  <img src="gambar/produk/<?php echo $data['gambar1']; ?>" class="card-img-top" alt="..." style="max-height: 275px;">

				   <span class="w3-tag w3-display-topleft">New</span>

				  <div class="card-body bg-light">
				    <h5 class="card-title"><b><?php echo $data['merk']; ?></b></h5>
				    <del><h5 class="card-title"><b><?php echo $data['harga_awal']; ?></b></h5></del>	
				   	<a href="?page=detail_produk&&id=<?php echo $data['id_produk']; ?>" class="btn btn-danger mt-1"><?php echo $data['harga']; ?>
		   			 </a>

				   	<a href="?page=produk_detail&&id=<?php echo $data['id_produk']; ?>" class="btn btn-primary mt-1">Detail</a>

				  </div>
				 </div>		  
			  </div>	
			  <?php 
			}
			   ?>	  

			</div>
				<!-- end produk -->