 <?php 
	include "koneksi.php";
	@$_GET['']
 ?>
 <!-- section -->
	<section id="home" class="mb-5 bg-primary">
	 <div class="container">
	 	<div class="row">
	 		<div class="col-md-8 w3-animate-zoom sec text-light">
						<h2 class="text-light" style="margin-top: 200px; font-size: 40px; font-weight: bold;">Mulai Belanja disini</h2>
						<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						 </p>
						<a class="nav-ling smooth-scroll" href="#belanja" style="text-decoration: none; color: white;">Mulai Belanja</a>
				  </div>

				  <div class="col-md-4 mt-4 w3-animate-zoom">
				  	<div class="gambar">
				  	<img src="./gambar/bg-baru.png" style="max-width: 400px; margin-top: 40%;">
				  </div>
				  </div>
	 		</div>
			</section>	
			<!-- end section -->



			<!-- kaos -->

			<h2 class="text-center text-primary" id="belanja" style="font-weight: bold;">PRODUK PILIHAN</h2>


		<div class="container">
			<h5 style="font-weight: bold;">KAOS TERBARU</h5>
			<div class="w3-row mx-auto">

		<?php 
	      $query = mysqli_query($koneksi, "select*from produk where id_kategori=7 order by id_produk desc limit 0,4");
	      while ($data = mysqli_fetch_array($query)) {

	      	if ($data ['gambar1'] == "") {
				$data ['gambar1'] = "produk4.jpg";
			}
	 	  ?>

			<div class="w3-col l3 s6 mt-4" align="center">
				<div class="card shadow-sm" style="width: 97%;">

				<div class="pic" style="width: 100%; height: 100%;">
				  <img src="gambar/produk/<?php echo $data['gambar1']; ?>" class="card-img-top" alt="..."  style="width: 100%; height: 100%; object-fit: cover;">
				

				   <span class="w3-tag w3-display-topleft"><i class="fas fa-eye"></i><?php echo $data['dilihat']; ?></span>

				  <div class="card-body bg-light">
				    <h5 class="card-title"><b><?php echo $data['merk']; ?></b></h5>	
				   	<del><b><?php echo $data['harga_awal']; ?></b></del>
					<br>
				   	<a href="?page=produk_detail&&id=<?php echo $data['id_produk']; ?>" class="btn btn-danger mt-1"><?php echo $data['harga']; ?>
		   			 </a>

				   	<a href="?page=produk_detail&&id=<?php echo $data['id_produk']; ?>" class="btn btn-primary mt-1">Detail</a>

				  </div>
				 </div>		  
			  </div>	

			 </div>
			  <?php 
			}
			   ?>	  

			</div>
			<h3 class="text-right"><a href="?page=kaos"class="text-right" style="font-weight: bold; text-decoration: none; color: #000;">Lihat Selengkapnya...</a></h3>
		</div>
	 <!-- end kaos -->



	 <!-- hoodie -->


			<div class="container" style="margin-top: 140px;">
				<h5 style="font-weight: bold;">HOODIE TERBARU</h5>
			<div class="w3-row mx-auto">

		<?php 
	      $query = mysqli_query($koneksi, "select*from produk where id_kategori=8 order by id_produk desc limit 0,4");
	      while ($data = mysqli_fetch_array($query)) {

	      	if ($data ['gambar1'] == "") {
				$data ['gambar1'] = "produk4.jpg";
			}
	 	  ?>

			<div class="w3-col l3 s6 mt-4" align="center">
				<div class="card" style="width: 97%;">

				<div class="pic" style="width: 100%; height: 100%;">
				  <img src="gambar/produk/<?php echo $data['gambar1']; ?>" class="card-img-top" alt="..."  style="width: 100%; height: 100%; object-fit: cover;">
				

				   <span class="w3-tag w3-display-topleft"><i class="fas fa-eye"></i><?php echo $data['dilihat']; ?></span>

				  <div class="card-body bg-light">
				    <h5 class="card-title"><b><?php echo $data['merk']; ?></b></h5>	
				   	<del><b><?php echo $data['harga_awal']; ?></b></del>
					<br>	
				   	<a href="?page=produk_detail&&id=<?php echo $data['id_produk']; ?>" class="btn btn-danger mt-1"><?php echo $data['harga']; ?>
		   			 </a>

				   	<a href="?page=produk_detail&&id=<?php echo $data['id_produk']; ?>" class="btn btn-primary mt-1">Detail</a>

				  </div>
				 </div>		  
			  </div>	

			 </div>
			  <?php 
			}
			   ?>	  

			</div>
			<h3 class="text-right"><a href="?page=hoodie"class="text-right" style="font-weight: bold; text-decoration: none; color: #000;">Lihat Selengkapnya...</a></h3>
		</div>

	 <!-- end hoodie -->




	 <!-- Aksesoris -->

	 <div class="container" style="margin-top: 140px;">
				<h5 style="font-weight: bold;">AKSESORIS TERBARU</h5>
			<div class="w3-row mx-auto">

		<?php 
	      $query = mysqli_query($koneksi, "select*from produk where id_kategori=9 order by id_produk desc limit 0,4");
	      while ($data = mysqli_fetch_array($query)) {

	      	if ($data ['gambar1'] == "") {
				$data ['gambar1'] = "produk4.jpg";
			}
	 	  ?>

			<div class="w3-col l3 s6 mt-4" align="center">
				<div class="card" style="width: 97%;">

				<div class="pic" style="width: 100%; height: 100%;">
				  <img src="gambar/produk/<?php echo $data['gambar1']; ?>" class="card-img-top" alt="..."  style="width: 100%; height: 100%; object-fit: cover;">
				

				   <span class="w3-tag w3-display-topleft"><i class="fas fa-eye"></i><?php echo $data['dilihat']; ?></span>

				  <div class="card-body bg-light">
				    <h5 class="card-title"><b><?php echo $data['merk']; ?></b></h5>	

				    <del><b><?php echo $data['harga_awal']; ?></b></del>
					<br>
				   		
				   	<a href="?page=produk_detail&&id=<?php echo $data['id_produk']; ?>" class="btn btn-danger mt-1"><?php echo $data['harga']; ?>
		   			 </a>

				   	<a href="?page=produk_detail&&id=<?php echo $data['id_produk']; ?>" class="btn btn-primary mt-1">Detail</a>

				  </div>
				 </div>		  
			  </div>	

			 </div>
			  <?php 
			}
			   ?>	  

			</div>
			<h3 class="text-right"><a href="?page=aksesoris"class="text-right" style="font-weight: bold; text-decoration: none; color: #000;">Lihat Selengkapnya...</a></h3>
		</div>
		<!-- end Aksesoris -->
