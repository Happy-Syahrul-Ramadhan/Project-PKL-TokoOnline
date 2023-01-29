<?php
	$page = @$_GET['page'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ars Cloth</title>

	<meta name="viewport" content="width=device-width,initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="font-awesome/css/all.min.css">

	<link rel="stylesheet" type="text/css" href="css/style.css">

	<link rel="stylesheet" href="w3school/w3.css">

	<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>

		<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light shadow">
			<div class="container">

		<h4 class="text-dark font-weight-bold" style="cursor: pointer;"><a href="index.php" style="text-decoration: none; color: #000;"><i class="text-dark mr-2 mt-4"><img src="gambar/logo.png" width="90"></i>Cloth</a></h4>

	  <a class="navbar-brand font-weight-bold" href="#"></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav ml-auto mr-3">
	      <li class="nav-item">
	        <a class="nav-link <?php if($page == ''){ echo 'active'; }; ?>" href="index.php">Beranda</a>

	      </li><li class="nav-item">
	        <a class="nav-link <?php if($page == 'list_produk'){ echo 'active'; }; ?>" href="?page=list_produk">Produk</a>

	      </li><li class="nav-item">
	        <a class="nav-link <?php if($page == 'tentang'){ echo 'active'; }; ?>" href="?page=tentang">Tentang Kami</a>
	      </li>

	      </li><li class="nav-item">
	        <a class="nav-link <?php if($page == 'hubungi'){ echo 'active'; }; ?>" href="?page=hubungi">Hubungi Kami</a>
	    </ul>

	     <form class="form-inline my-2 my-lg-0">
	      	<input type="hidden" name="page" value="pencarian">
	      	<input class="form-control mr-sm-2" type="search" placeholder="Cari Produk..." aria-label="Search" style="width: 150px; margin-right: 5px; border: 1px solid black;" name="cari">
	      <button class="btn btn-dark my-2 my-sm-0" type="submit">Search</button>
	    </form>
	    
	  </div>
	 </div>
</nav>

	
	<?php 
		$page = @$_GET['page'];
		if (file_exists($page . '.php')) {
			include $page . '.php';
		}else{
			include "home.php";
		}

	 ?>

	 	<!-- scroll Top -->
	<div class="top">
		<div class="link-top w3-animate-zoom" onclick="gotop();">&uarr;</div>
	</div>
	<!-- end scroll Top -->

	
 	<footer class="bg-primary text-light p-5 mt-4">
 	<div class="row">
 		<div class="col-md-3">
 			<h5>LAYANAN PELANGGAN</h5>
 			<ul>
 				<li>Pusat Bantuan</li>
 				<li>Cara Pengiriman</li>
 				<li>Cara Pengembalian</li>
 			</ul>
 		</div>
 		<div class="col-md-3">
 			<h5>TENTANG KAMI</h5>
 			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
 			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
 			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
 			consequat.</p>
 		</div>
 		<div class="col-md-3">
 			<h5>MITRA KERJASAMA</h5>
 			<ul>
 				<li>Gojek</li>
 				<li>Grab</li>
 				<li>JNE</li>
 				<li>JNT</li>
 			</ul>
 		</div>
 		<div class="col-md-3">
 			<h5>HUBUNGI KAMI</h5>
 			<ul>
 				<li>0856-5876-3990</li>
 				<li>arscloth@gmail.com</li>
 			</ul>
 		</div>
 	</div>
</footer>
<div class="copyright text-center bg-primary font-weight-bold text-light p-4">
	<hr>
			 &copy; Copyright 2020 Developer By ArsCloth
		</div>


	<script type="text/javascript" src="js/jquery-3.5.1.min.js">
	</script>

	<script type="text/javascript" src="js/popper.min.js"></script>

	<script type="text/javascript" src="js/bootstrap.min.js" ></script>

	<script type="text/javascript" src="js/script.js"></script>


</body>
</html>