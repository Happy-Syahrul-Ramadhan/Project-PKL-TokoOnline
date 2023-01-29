<?php 
	$id = $_GET['id'];
	$query = mysqli_query($koneksi, "delete from kategori_produk where id_kategori=$id");
	echo '<script>alert("Hapus Data kategori Berhasil")</script>';
	echo '<meta http-equiv="refresh" content="0;url=?page=kategori_produk">';
 ?>

 