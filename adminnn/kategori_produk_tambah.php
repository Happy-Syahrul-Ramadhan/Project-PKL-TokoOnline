<div class="jumbotron bg-primary text-light" style="padding: 20px 0;">
	<div class="container text-center">
		<h2>Kategori produk</h2>
	</div>
</div>

<div class="container">

	<?php 
		if (isset($_POST['nama_kategori'])) {
			$nama_kategori = $_POST['nama_kategori'];

			$query = mysqli_query($koneksi, "insert into kategori_produk(nama_kategori) values('$nama_kategori')");
			if ($query) {
				echo '<script>alert("Selamat! Kategori Berhasil Ditambahkan")</script>';
				echo '<meta http-equiv="refresh" content="0;url=?page=kategori_produk">';
			}else{			
				echo '<script>alert("Maaf,data Gagal ditambah")</script>';
			}
		}
	 ?>

	<form method="post" enctype="multipart/form-data">
		<table class="table table-bordered">
			<tr>
				<td width="180">Nama Kategori</td>
				<td><input type="text" name="nama_kategori" class="form-control"></td>
			</tr>

			

			<tr>
				<td></td>
				<td>
					<button type="submit" class="btn btn-success">Simpan</button>
					<button type="submit" class="btn btn-secondary">Reset</button>
				</td>
			</tr>

		</table>
	</form>
</div>