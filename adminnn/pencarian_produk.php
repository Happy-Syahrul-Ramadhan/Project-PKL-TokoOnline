<?php 
	$cari = $_GET['cari'];
	$query = mysqli_query($koneksi, "select*from produk left join kategori_produk on kategori_produk.id_kategori=produk.id_kategori where id_produk like '%$cari%'");
 ?>

<div class="container mt-3">
	<div class="text-center">
		<a href="?page=produk_tambah" class="btn btn-lg btn-primary">+Tambah Produk</a>
	</div>
	<br>
	<br>


<div class="jumbotron bg-primary text-light" style="padding: 20px 0;">
	<div class="container text-center">
		<h2>Pencarian Produk</h2>
		Ditemukan Total <b><?php echo mysqli_num_rows($query); ?>Produk</b>
		Dengan Id :<b>"<?php echo $cari; ?>"</b>
	</div>
</div>

	<form class="form-inline my-2 my-lg-0">
	      	<input type="hidden" name="page" value="pencarian">
	      	<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="width: 150px; margin-right: 5px;" name="cari">
	      <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
	   </form>


	<hr>
	<table class="table	table-bordered table-striped table-responsive">
		<tr>
			<th>Gambar1</th>
			<th>Kategori</th>
			<th>Merk</th>
			<th>Deskripsi</th>
			<th>Stok</th>
			<th>Harga</th>
			<th>Dilihat</th>
			<th>Aksi</th>
		</tr>

		<?php 
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

		 	<td><?php echo $data['nama_kategori']; ?></td>

		 	<td><?php echo $data['merk']; ?></td>

		 	<td><?php echo $data['deskripsi']; ?></td>
		 	
		 	<td><?php echo $data['stok']; ?> Pcs</td>

		 	<td>Rp.<?php echo $data['harga']; ?></td>

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