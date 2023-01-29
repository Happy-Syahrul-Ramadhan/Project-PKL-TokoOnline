<div class="jumbotron bg-primary text-light" style="padding: 20px 0;">
	<div class="container text-center">
		<h2>Produk Terbaru Total: (<?php echo mysqli_num_rows(mysqli_query($koneksi, "select*from produk")); ?>) Produk</h2>
	</div>
</div>

<div class="container">

	<div class="text-center">
		<a href="?page=produk_tambah" class="btn btn-lg btn-primary">+Tambah Produk</a>
	</div>
	<br>
	<br>

	<form class="form-inline my-2 my-lg-0">
	      	<input type="hidden" name="page" value="pencarian_produk">
	      	<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="width: 150px; margin-right: 5px;" name="cari">
	      <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
	   </form>


	<hr>
	<table class="table	table-bordered table-striped table-responsive">
		<tr>
			<th>Gambar1</th>
			<th>Gambar2</th>
			<th>Kategori</th>
			<th>Merk</th>
			<th>Deskripsi</th>
			<th>Harga</th>
			<th>Harga Diskon</th>
			<th>Dilihat</th>
			<th>Aksi</th>
		</tr>

		<?php 
			$cari = @$_GET['cari'];
			$query = mysqli_query($koneksi, "select*from produk left join kategori_produk on kategori_produk.id_kategori=produk.id_kategori order by id_produk desc");
			while ($data = mysqli_fetch_array($query)) {

		 ?>

		 <tr>
		 	<td>
		 		<?php 
		 			if ($data['gambar1'] != "") {
		 		 ?>

		 		 <img src="../gambar/produk/<?php echo $data['gambar1']; ?>" width="100">

		 		 <?php 
		 		}
		 		  ?>
		 	</td>
		 	<td>
		 		<?php 
		 			if ($data['gambar2'] != "") {
		 		 ?>

		 		 <img src="../gambar/produk/<?php echo $data['gambar2']; ?>" width="100">

		 		 <?php 
		 		}
		 		  ?>
		 	</td>

		 	<td><?php echo $data['nama_kategori']; ?></td>

		 	<td><?php echo $data['merk']; ?></td>

		 	<td><?php echo $data['deskripsi']; ?></td>
		 	
		 	
		 	<td><?php echo $data['harga']; ?></td>

		 	<td><?php echo $data['harga_awal']; ?></td>

		 	<td><?php echo $data['dilihat']; ?> Kali</td>

		 	<td>

		 		<a  class="btn btn-danger" href="?page=produk_hapus&&id=<?php echo $data['id_produk']; ?>">Hapus</a>
		 		
		 		<a class="btn btn-primary mt-1" href="?page=produk_ubah&&id=<?php echo $data['id_produk']; ?>">Ubah</a>

		 	</td>
		 </tr>

		 <?php 
		}
		  ?>
	</table>
</div>