<div class="jumbotron bg-primary text-light" style="padding: 20px 0;">
	<div class="container text-center">
		<h2>Kategori produk</h2>
	</div>
</div>

<div class="container">

	<?php 
		$id = $_GET['id'];
		if (isset($_POST['nama_kategori'])) {
			$nama_kategori = $_POST['nama_kategori'];

			$query = mysqli_query($koneksi, "update kategori_produk set nama_kategori='$nama_kategori' where id_kategori=$id");
			if ($query) {
				echo '<script>alert("Selamat! Kategori Berhasil Diubah")</script>';
				echo '<meta http-equiv="refresh" content="0;url=?page=kategori_produk">';
			}else{			
				echo '<script>alert("Maaf,data Gagal Diubah")</script>';
			}
		}

		$q = mysqli_query($koneksi, "select*from kategori_produk where id_kategori=$id");
		$data = mysqli_fetch_array($q);
	 ?>

	<form method="post" enctype="multipart/form-data">
		<table class="table table-bordered">
			<tr>
				<td width="180">Nama Kategori</td>
				<td><input type="text" name="nama_kategori" class="form-control" value="<?php echo $data['nama_kategori']; ?>"></td>
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