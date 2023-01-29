<div class="jumbotron bg-primary text-light" style="padding: 20px 0;">
	<div class="container text-center">
		<h2>Produk Ubah</h2>
	</div>
</div>

<div class="container">

	<?php 
		$id = $_GET['id'];
		if (isset($_POST['deskripsi'])) {
			$deskripsi = $_POST['deskripsi'];
			$gambar1 = "";
			$gambar2 = "";
			$id_kategori = $_POST['id_kategori'];
			$merk = $_POST['merk'];
			$harga = $_POST['harga'];
			$harga_awal = $_POST['harga_awal'];
			$dilihat = 0;
			
			if ($_FILES['gambar1']['name'] != "") {
				$gambar1 = 'produk_' . $_FILES['gambar1']['name'];
				move_uploaded_file($_FILES['gambar1']['tmp_name'], '../gambar/produk/produk_' . $_FILES['gambar1']['name']);
			}
				if ($_FILES['gambar2']['name'] != "") {
				$gambar2 = 'produk2_' . $_FILES['gambar2']['name'];
				move_uploaded_file($_FILES['gambar2']['tmp_name'], '../gambar/produk/produk2_' . $_FILES['gambar2']['name']);
			
				$query = mysqli_query($koneksi, "update produk set gambar1='$gambar1',gambar2='$gambar2' where id_produk=$id");
			}

			$query = mysqli_query($koneksi, "update produk set deskripsi='$deskripsi', id_kategori='$id_kategori', merk='$merk',harga='$harga', harga_awal='$harga_awal' where id_produk=$id");

			if ($query) {
				echo '<script>alert("Ubah Data Berhasil")</script>';
				echo '<meta http-equiv="refresh" content="0;url=?page=produk">';
			}else{
				echo '<script>alert("Ubah Data Gagal")</script>';
			}

		}

		$q = mysqli_query($koneksi, "select*from produk where id_produk=$id");
		$data = mysqli_fetch_array($q);
		
	 ?>

	 <form method="post" enctype="multipart/form-data">
	 	<table class="table table-striped table-responsive table-bordered">
	 		<tr>
	 			<td>Gambar1</td>
	 			<td>
	 				<input type="file" name="gambar1">
	 				<?php 
	 				if ($data['gambar1'] != "") {
	 				 ?>
	 				 <br>
	 				 *Jika Tidak Diganti Kosongkan Saja. <br>
	 				<img src="../gambar/produk/<?php echo $data['gambar1']; ?>" width=300>
	 				<?php 
	 			}
	 				 ?>
	 			</td>
	 		</tr>

	 		<tr>
	 			<td>Gambar2</td>
	 			<td>
	 				<input type="file" name="gambar2">
	 				<?php 
	 				if ($data['gambar2'] != "") {
	 				 ?>
	 				 <br>
	 				 *Jika Tidak Diganti Kosongkan Saja. <br>
	 				<img src="../gambar/produk/<?php echo $data['gambar2']; ?>" width=300>
	 				<?php 
	 			}
	 				 ?>
	 			</td>
	 		</tr>

	 		<tr>
	 			<td width="180">Kategori Produk</td>
	 			<td>
					<select name="id_kategori" class="form-control">
						<option value="">- Pilih Kategori -</option>

						<?php 
							$q = mysqli_query($koneksi, "select*from kategori_produk");
							while ($kategori = mysqli_fetch_array($q)) {

							
						 ?>

						 <option 
						 	<?php 
						 		if ($data['id_kategori'] == $kategori['id_kategori']) {
						 			echo 'selected';
						 		}
						 	 ?>

						 value="<?php echo $kategori['id_kategori']; ?>"><?php echo $kategori['nama_kategori']; ?> </option>

						 <?php 
						}
						  ?>
					</select>
					
				</td>
	 		</tr>

	 		<tr>
	 			<td>Merk</td>
	 			<td><input type="text" name="merk" class="form-group form-control" value="<?php echo $data['merk']; ?>"></td>
	 		</tr>

	 		<tr>
	 			<td>Deskripsi</td>
	 			<td><textarea name="deskripsi" class="form-group form-control"><?php echo $data['deskripsi']; ?></textarea></td>
	 		</tr>

	 		<tr>
	 			<td>Harga Diskon</td>
	 			<td><input type="text" name="harga" class="form-group form-control" value="<?php echo $data['harga']; ?>"></td>
	 		</tr>

	 		<tr>
	 			<td>Harga Awal</td>
	 			<td><input type="text" name="harga_awal" class="form-group form-control" value="<?php echo $data['harga_awal']; ?>"></td>
	 		</tr>

	 		<tr>
	 			<td></td>
	 			<td>
	 				<button type="submit" class="btn btn-primary">Simpan</button>

	 				<button type="submit" class="btn btn-danger">Reset</button>
	 			</td>
	 		</tr>
	 		
	 	</table>	
	 </form>
</div>

