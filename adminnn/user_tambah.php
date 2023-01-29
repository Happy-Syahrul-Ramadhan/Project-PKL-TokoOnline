	<div class="jumbotron bg-primary text-light" style="padding: 20px 0;">
	<div class="container text-center">
		<h2>user Tambah</h2>
	</div>
</div>

<div class="container">
	<?php 
		if (isset($_POST['nama'])) {
			$nama = $_POST['nama'];
			$username = $_POST['username'];
			$password = md5($_POST['password']);
			

			$query = mysqli_query($koneksi, "insert into user(nama,username,password) values('$nama','$username', '$password')");
			if ($query) {
				echo '<script>alert("selamat,data berhasil ditambah")</script>';
				echo '<meta http-equiv="refresh" content="0;url=?page=user">';
			}else{
				echo '<script>alert("Maaf,data Gagal ditambah")</script>';
			}
		}
	 ?>

	<form method="post" enctype="multipart/form-data">
	<a href="?page=user"><i class="fas fa-arrow-left p-2 mb-2" style="font-size: 19px;">Kembali</i></a>
		<table class="table table-bordered">
			<tr>
				<td width="180">nama</td>
				<td><input type="text" name="nama" class="form-control"></td>
			</tr>

			<tr>
				<td width="180">Username</td>
				<td><input type="text" name="username" class="form-control"></td>
			</tr>

			<tr>
				<td width="180">Password</td>
				<td><input type="text" name="password" class="form-control"></td>
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
