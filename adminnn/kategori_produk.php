<div class="jumbotron bg-primary text-light" style="padding: 20px 0;">
	<div class="container text-center">
		<h2>Kategori Produk</h2>
	</div>
</div>

<div class="container">

	<div class="text-center">
		<a href="?page=kategori_produk_tambah" class="btn btn-lg btn-primary">+Tambah Data</a>
	</div>
	<hr>
	<table class="table	table-bordered bg-white">
		<tr>
			
			<th>Nama Kategori</th>
			<th>Aksi</th>
		</tr>

		<?php 
			$query = mysqli_query($koneksi, "select*from kategori_produk");
			while ($data = mysqli_fetch_array($query)) {

		 ?>

		 <tr>
		 	
		 	<td><?php echo $data['nama_kategori']; ?></td>
		 	
		 	<td>
		 		<a class="btn btn-primary" href="?page=kategori_produk_ubah&&id=<?php echo $data['id_kategori']; ?>">Ubah</a>
		 		<a  class="btn btn-danger" href="?page=kategori_produk_hapus&&id=<?php echo $data['id_kategori']; ?>">Hapus</a>
		 	</td>
		 </tr>

		 <?php 
		}
		  ?>
	</table>
</div>