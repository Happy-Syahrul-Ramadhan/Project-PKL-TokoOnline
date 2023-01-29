<?php 
	$id = $_GET['id'];
	$query = mysqli_query($koneksi, "delete from kontak where id_kontak=$id");
	echo '<script>alert("Hapus Data kontak Berhasil")</script>';
	echo '<meta http-equiv="refresh" content="0;url=?page=kontak">';
 ?>

 