	<div class="jumbotron bg-primary text-light" style="padding: 20px 0;">
	<div class="container text-center">
		<h2>user Sekolah</h2>
	</div>
</div>

<div class="container">
	<?php 
		$id = $_GET['id'];
		if (isset($_POST['nama'])) {
			$nama = $_POST['nama'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			
			if ($password != "") {
				$password = md5($password);
				$query = mysqli_query($koneksi, "update user set password='$password' where id_user=$id");
			}

			$query = mysqli_query($koneksi, "update user set nama='$nama', username='$username' where id_user=$id");
			if ($query) {
				echo '<script>alert("selamat,data berhasil Diubah")</script>';
				echo '<meta http-equiv="refresh" content="0;url=?page=user">';
			}else{
				echo '<script>alert("Maaf,data Gagal Diubah")</script>';
			}
		}

		$q = mysqli_query($koneksi, "select*from user where id_user=$id");
		$data = mysqli_fetch_array($q);
	 ?>

	<form method="post" enctype="multipart/form-data">
		<a href="?page=user"><i class="fas fa-arrow-left p-2 mb-2" style="font-size: 19px;">Kembali</i></a>
		<table class="table table-bordered">
			<tr>
				<td width="180">nama</td>
				<td><input type="text" name="nama" class="form-control" value="<?php echo $data['nama']; ?>"></td>
			</tr>

			<tr>
				<td width="180">Username</td>
				<td><input type="text" name="username" class="form-control" value="<?php echo $data['username']; ?>"></td>
			</tr>

			<tr>
				<td width="180">Password</td>
				<td><input type="password" name="password" class="form-control">
					*Jika Tidak Dirubah Maka Kosongkan Saja.
				</td>
			</tr>

			<tr>
				<td></td>
				<td>
					<button type="submit" class="btn btn-success">Simpan</button>

					<button type="submit" class="btn btn-secondary mt-1">Reset</button>
				</td>
			</tr>

		</table>
	</form>
</div>
