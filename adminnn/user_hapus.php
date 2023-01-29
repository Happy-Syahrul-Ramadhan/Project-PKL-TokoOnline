<?php 
	$id = $_GET['id'];
	$query = mysqli_query($koneksi, "delete from user where id_user=$id");
	
	echo '<script>alert("Hapus Data user Berhasil")</script>';
	echo '<meta http-equiv="refresh" content="0;url=?page=user">';
 ?>
