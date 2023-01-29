<div class="jumbotron bg-primary text-light " style="padding: 20px 0;">
	<div class="container text-center">
		<h2>Tentang ArsCloth</h2>
	</div>
</div>

<div class="container">
	<?php 

	if (isset($_POST['tentang'])) {
		$tentang = $_POST['tentang'];

		$q = mysqli_query($koneksi, "update tentang set tentang='$tentang'");

		echo '<script>alert("Ubah tentang Berhasil")</script>';
		echo '<meta http-equiv="refresh" content="0;url=?page=tentang">';
	}

	$query = mysqli_query($koneksi, "select*from tentang");
	$data = mysqli_fetch_array($query);
	 ?>
	 <b>Tentang Sekolah</b>
	 <form method="post">
	 <textarea class="textarea" rows="10" name="tentang"><?php echo $data['tentang']; ?></textarea>
	 <button type="submit" class="btn btn-success">Update</button>
	 <button type="reset" class="btn btn-secondary">Reset</button>
	 <br><br>
</form>

</div>
