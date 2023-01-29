<?php 
	include "koneksi.php";
 ?>

 <div class="jumbotron text-light bg-primary" style="padding: 20px 0; margin-top: 60px;">
	<div class="container text-center">
		<h2><b>Hubungi Kami</b></h2>
	</div>
</div>

	<?php 
		if (isset($_POST['nama'])) {
			$nama = $_POST['nama'];
			$email = $_POST['email'];
			$website = $_POST['website'];
			$alamat = $_POST['alamat'];
			$pesan = $_POST['pesan'];

			$query = mysqli_query($koneksi, "insert into kontak(nama, email, website, alamat, pesan) values('$nama', '$email', '$website', '$alamat', '$pesan')");
			if ($query) {
				echo "<script>
                    Swal.fire({
                          icon: 'success',
                          title: 'Pesan Berhasil Dikirim :)',
                          text: 'Terima Kasih',
                        }).then((result) => {
                            window.location.href = 'index.php'
                        })
                    </script>";
                }else{
                    echo "<script>
                    Swal.fire({
                          icon: 'error',
                          title: 'Pesan gagal Dikirim :(',
                          text: 'Silahkan coba lagi'
                        }).then((result) => {
                            window.location.href = 'login.php'
                        })
                    </script>";
			}

		}
	 ?>
<div class="container">
 	<div class="row">
 		<div class="col-md-7">
 			
 		<form method="post"> 

		<label>Nama*</label>
		<input type="text" name="nama" class="form-control form-group" required placeholder="Masukkan Nama">

		<label>Email*</label>
		<input type="email" name="email" class="form-control form-group" required placeholder="Masukkan Email">

		<label>Website*</label>
		<input type="text" name="website" class="form-control form-group" placeholder="Masukkan Website">

		<label>Alamat*</label>
		<textarea name="alamat" class="form-control form-group" required placeholder="Masukkan Alamat"></textarea>

		<label>Pesan*</label>
		<textarea name="pesan" class="form-control form-group" required placeholder="Masukkan Pesan" style="height: 200px;"></textarea>

		<button type="submit" class="btn btn-primary">Kirim</button>
	</form>
 		</div>

 		<div class="col-md-5">
			<h5><b>Alamat:</b></h5>
			<h6>Jl.Lintas Lorem ipsum dolor sit amet, consectetur adipisicing elit</h6>
			<br>

			<h5><b>Phone:</b> +62856-5876-3990</h5>
			<h5><b>Email:</b> arscloth@gmail.com</h5>

 		</div>
 	</div>
 </div>
		