<div class="jumbotron bg-primary text-light" style="padding: 20px 0;">
	<div class="container text-center">
		<h2>Kotak Masuk</h2>
	</div>
</div>

<div class="container">

	 <h3><b>Kotak Masuk:</b></h3>
	 <table class="table table-bordered table-striped table-responsive">
	 	<tr>
	 		<th>Nama</th>
	 		<th>Email</th>
	 		<th>Website</th>
	 		<th>Alamat</th>
	 		<th>Pesan</th>
	 		<th>Aksi</th>
	 	</tr>
	 		
	 	<?php 
		$query = mysqli_query($koneksi, "select*from kontak order by id_kontak desc");
		while ($data = mysqli_fetch_array($query)) {
	 ?>

	 <tr>
	 	<td><?php echo $data['nama']; ?></td>
	 	<td><?php echo $data['email']; ?></td>
	 	<td><?php echo $data['website']; ?></td>
	 	<td><?php echo $data['alamat']; ?></td>
	 	<td><?php echo $data['pesan']; ?></td>
	 	<td>
	 		<a class="btn btn-danger" href="?page=kontak_hapus&&id=<?php echo $data['id_kontak'] ?>">Hapus</a>
	 	</td>
	 </tr>
	 <?php 
	}
	  ?>
	 </table>
</div>