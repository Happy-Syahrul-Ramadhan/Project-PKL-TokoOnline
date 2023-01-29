<?php 
	$id = $_GET['id'];
	$query = mysqli_query($koneksi, "delete from produk where id_produk=$id");
	echo '<script>alert("Hapus Data produk Berhasil")</script>';
	echo '<meta http-equiv="refresh" content="0;url=?page=produk">';
 ?>

 