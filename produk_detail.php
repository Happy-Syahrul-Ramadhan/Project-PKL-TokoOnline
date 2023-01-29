<?php 
	include "koneksi.php";

	$id = $_GET['id'];
	mysqli_query($koneksi, "update produk set dilihat=dilihat+1 where id_produk=$id");

	$q = mysqli_query($koneksi, "select*from produk where id_produk=$id");
	$data = mysqli_fetch_array($q)

 ?>

 <div class="jumbotron bg-primary" style="padding: 10px 0; margin-top: 50px;">
 	<div class="container text-center">
 		<h2 class="text-light" style="font-weight: bold;"><?php echo $data['merk']; ?></h2>
 		<i style="font-size: 20px;" class="fas fa-eye text-light">Dilihat <?php echo $data['dilihat']; ?>Kali.</i>
 	</div>
 </div>

 <div class="container text-center">
 	<div class="row">
 		<div class="col-md-6">
 			<?php 
 				if ($data['gambar1'] != "") {
 			 ?>
 			 <img src="gambar/produk/<?php echo $data['gambar1']; ?>" onclick="onClick(this)"  style="max-width: 70%; cursor: pointer;">

 			  <div id="modal01" class="w3-modal" onclick="this.style.display='none'">
		   			<div class="w3-animate-zoom">
		    		 <img id="img01" style="width: 70%; margin-top: 100px;">
		  		</div>
		  	</div>
 			 <?php 
 			}
 			  ?>
 			<?php 
 				if ($data['gambar2'] != "") {
 			 ?>
 			 <img src="gambar/produk/<?php echo $data['gambar2']; ?>" onclick="onClick(this)"  style="max-width: 70%; cursor: pointer;">
 			 
 			  <div id="modal02" class="w3-modal" onclick="this.style.display='none'">
		   			<div class="w3-animate-zoom">
		    		 <img id="img02" style="width: 80%; margin-top: 100px;">
		  		</div>
		  	</div>
 			 <?php 
 			}
 			  ?>


 			  <br>
 			  <h5 class="text-left"><b style="font-size: 20px;">Deskripsi :</b> <br>
 			  <?php echo $data['deskripsi']; ?> </h5><br><br><br>
 		</div>

 		<div class="col-md-6" style="margin-top: 70px;">

 		<ul class="list-group" >
		  <li class="list-group-item text-center bg-primary text-light"><i class="fas fa-list mr-1"></i><?php echo $data['merk']; ?></li>

		  <del><li class="list-group-item text-center"><?php echo $data['harga_awal']; ?></li></del>

		  <li class="list-group-item text-center"><?php echo $data['harga']; ?></li>
		  	
		  	   <a href="?page=pemesanan&&id=<?php echo $data['id_produk']; ?>" class="btn btn-danger text-light mt-1">Beli Sekarang</a></li>
			</ul>

 		</div>
 	</div>
 </div>




 <div class="container" style="margin-top: 200px;">
 	<h2 align="left">Ulasan(<?php echo mysqli_num_rows(mysqli_query($koneksi, "select*from komentar where id_produk=$id")); ?>)</h2>

 <?php 
 	$k = mysqli_query($koneksi, "select*from komentar where id_produk=$id order by id_komentar desc");
 	while ($komen = mysqli_fetch_array($k)) {

  ?>
 	 <b>
 	   	<?php echo $komen['nama']; ?> |
 	   	<?php echo $komen['email']; ?> |
 	   	<?php echo $komen['tanggal'] . ' ' . $komen['waktu']; ?>
 	   </b>
 	 <br>
 	 <?php 
 	 	echo $komen['komentar'];
 	  ?>

 	  <?php 
 	  	if ($komen['balasan'] != "") {
 	   ?>

 	   <br>
 	   <b>Admin Membalas : </b> <br>
 	   <?php 
 	   	echo $komen['balasan'];
 	   }
 	    ?>
 	<hr>

 	<?php 
 }
 	 ?>

 	 <!-- chapca -->
 	 <?php 
 	 	$angka = "1234567890";
 	 	$hurufBesar = "ABCDEFGHIJKLMNOPQRSTUVWQYZ";
 	 	$hurufKecil = "abcdefghijklmnopqrstuvwxyz";

 	 	$randomAngka = rand() % strlen($angka) -1;
 	 	$randomHurufBesar = rand() % strlen($hurufBesar) -1;
 	 	$randomHurufKecil = rand() % strlen($hurufKecil) -1;
 	 	$randomAngka2 = rand() % strlen($angka) -1;
 	 	$randomHurufBesar2 = rand() % strlen($hurufBesar) -1;
 	 	$randomHurufKecil2 = rand() % strlen($hurufKecil) -1;

 	 	$kode = substr($angka, $randomAngka,1);
 	 	$kode .= substr($hurufBesar, $randomHurufBesar,1);
 	 	$kode .= substr($hurufKecil, $randomHurufKecil,1);
 	 	$kode .= substr($angka, $randomAngka2,1);
 	 	$kode .= substr($hurufBesar, $randomHurufBesar2,1);
 	 	$kode .= substr($hurufKecil, $randomHurufKecil2,1);
 	  ?>

 	  <?php 
 	  	if (isset($_POST['nama'])) {
 	  		$nama = $_POST['nama'];
 	  		$email = $_POST['email'];
 	  		$komentar = $_POST['komentar'];
 	  		$tanggal = date('d-m-Y');
 	  		$waktu = date('H:i:s');

 	  		if ($_POST['kode'] == $_SESSION['kode']) {
 	  			
 	  			$query = mysqli_query($koneksi, "insert into komentar(id_produk, nama, email, komentar, tanggal, waktu) values('$id', '$nama', '$email', '$komentar', '$tanggal', '$waktu')");
 	  			if ($query) {
 	  				 echo "<script>
                    Swal.fire({
                          icon: 'success',
                          title: 'Ulasan Berhasil Dikirim :)',
                          text: 'Silahkan Masuk',
                        }).then((result) => {
                            window.location.href ='?page=produk_detail'
                        })
                    </script>";
                }else{
                    echo "<script>
                    Swal.fire({
                          icon: 'error',
                          title: 'Ulasan Gagal Dikirim :(',
                          text: 'Silahkan coba lagi'
                        }).then((result) => {
                            window.location.href ='?page=produk_detail'
                        })
                    </script>";
 	  			}

 	  		}else{
 	  			echo '<script>alert("Kode Securyti Salah")</script>';
 	  		}

 	  	}

 	  	$_SESSION['kode'] = $kode;
 	   ?>

 	   <h2>Masukkan Ulasan</h2>

 	   <form method="post" style="max-width: 350px;">
 	   	<input type="text" name="nama" placeholder="Masukkan Nama" class="form-control form-group" required>

 	   	<input type="email" name="email" placeholder="Masukkan Email" class="form-control form-group" required> 
 	   
 	   <textarea style="width: 350px;" name="komentar" placeholder="Masukkan Ulasan" class="form-control form-group" rows="8" cols="8" required></textarea>

 	   <?php echo $kode; ?>
 	   <input type="text" name="kode" style="width: 100px; border: 2px solid #007bff;" placeholder="Input Kode">

 	   <button type="submit" class="btn btn-primary">Kirim</button>

 	 </form>
 </div>