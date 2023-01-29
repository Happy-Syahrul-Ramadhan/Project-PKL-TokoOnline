<div class="jumbotron bg-primary text-light" style="padding: 20px 0;">
	<div class="container text-center">
		<h2 class="tambah">Produk Tambah</h2>
	</div>
</div>

<div class="container">

	<?php 
		if (isset($_POST['submit'])) {
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
			}

			$query = mysqli_query($koneksi, "insert into produk(deskripsi,gambar1, gambar2, id_kategori, merk,harga,harga_awal, dilihat) values('$deskripsi','$gambar1','$gambar2', '$id_kategori', '$merk','$harga','$harga_awal', '$dilihat')");

			if ($query) {
				 echo "<script>
                    Swal.fire({
                          icon: 'success',
                          title: 'Tambah Data Berhasil :)',
                        }).then((result) => {
                            window.location.href = '?page=produk'
                        })
                    </script>";
                }else{
                    echo "<script>
                    Swal.fire({
                          icon: 'error',
                          title: 'Tambah Produk Gagal :(',
                          text: 'Silahkan coba lagi'
                        }).then((result) => {
                            window.location.href = '?page=produk_tambah'
                        })
                    </script>";
        }
    }

	 ?>

	 <form method="post" enctype="multipart/form-data">
	 	<table class="table table-striped table-responsive table-bordered">
	 		<tr>
	 			<td>Gambar1</td>
	 			<td><input type="file" name="gambar1"></td>
	 		</tr>
	 		<tr>
	 			<td>Gambar2</td>
	 			<td><input type="file" name="gambar2"></td>
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

						 <option value="<?php echo $kategori['id_kategori']; ?>"><?php echo $kategori['nama_kategori']; ?> </option>

						 <?php 
						}
						  ?>
					</select>
					
				</td>
	 		</tr>

	 		<tr>
	 			<td>Merk</td>
	 			<td><input type="text" name="merk" class="form-group form-control"></td>
	 		</tr>

	 		<tr>
	 			<td>Deskripsi</td>
	 			<td><textarea class="textarea" name="deskripsi"></textarea></td>
	 		</tr>

	 		<tr>
	 			<td>Stok</td>
	 			<td><input type="number" name="stok" class="form-group form-control"></td>
	 		</tr>

	 		<tr>
	 			<td>Harga Awal</td>
	 			<td><input type="text" name="harga_awal" class="form-group form-control"></td>
	 		</tr>

	 		<tr>
	 			<td></td>
	 			<td>
	 				<button type="submit" class="btn btn-primary" name="submit">Simpan</button>

	 				<button type="reset" class="btn btn-danger">Reset</button>
	 			</td>
	 		</tr>
	 		
	 	</table>	
	 </form>
</div>
