	<div class="jumbotron bg-primary text-light" style="padding: 20px 0;">
	<div class="container text-center">
		<h2><b>User</b></h2>
	</div>
</div>

<div class="container">
	<div class="text-center">
		<a href="?page=user_tambah" class="btn btn-lg btn-primary">+Tambah User</a>
	</div>
	<a href="index.php"><i class="fas fa-arrow-left p-2 mb-2" style="font-size: 19px;">Kembali</i></a>
	<table class="table table-bordered table-striped">
		<tr>
			<th>Nama</th>
			<th>Username</th>
			<th>Aksi</th>
		</tr>

		<?php 
			$query = mysqli_query($koneksi, "select*from user order by id_user desc");
			while ($data = mysqli_fetch_array($query)) {
		 ?>

		 <tr>
		 	<td><?php echo $data['nama']; ?></td>
		 	<td><?php echo $data['username']; ?></td>
		 	<td>

		 		<?php 
		 			if ($_SESSION['user']['id_user'] != $data['id_user']) {
		 		 ?>
		 		<a class="btn btn-danger mt-1" href="?page=user_hapus&&id=<?php echo $data['id_user']; ?>">Hapus</a>
		 		<?php 
		 	}
		 		 ?>

		 		<a class="btn btn-primary mt-1" href="?page=user_ubah&&id=<?php echo $data['id_user']; ?>">Ubah</a>

		 	</td>
		 </tr>
		 <?php 
		}
		  ?>

	</table>

</div>

</body>
</html>


