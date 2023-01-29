<style type="text/css">

	#img01{
    width:75%; 
    margin-top: 30px; 
	}
</style>

<?php 
	include "koneksi.php";

	$id = $_GET['id'];

	$q = mysqli_query($koneksi, "select*from produk where id_produk=$id");
	$data = mysqli_fetch_array($q)

 ?>

 <div class="jumbotron bg-primary text-light" style="padding: 10px 0; margin-top: 50px;">
 	<div class="container text-center">
 		<h2 class="text-center">"<?php echo $data['merk']; ?>"</h2>

 		<i style="font-size: 20px;" class="fas fa-eye text-center">Dilihat <?php echo $data['dilihat']; ?>Kali.</i>
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
		   			<div class=" w3-animate-zoom">
		    		 <img id="img01">
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
 			  <?php echo $data['deskripsi']; ?></h5> <br><br><br>
 		</div>

 		<div class="col-md-6" style="margin-top: 70px;">

 		<ul class="list-group text-center" >
		  <li class="list-group-item bg-primary text-light"><i style="font-size: 20px;" class="fas fa-list mr-1"></i><b style="font-size: 20px;"> Nama Produk: <br>
		  	"<?php echo $data['merk']; ?>"</b>
		  </li>

		  <del><li class="list-group-item"><?php echo $data['harga_awal']; ?></li></del>

		  <li class="list-group-item"><?php echo $data['harga']; ?></li>
			<br><br><br>


			<!-- Form pembayaran -->
			<h2 style="color: red; font-weight: bold;">Isi Form Dibawah Dengan Benar!</h2>
	<div class="pembayaran">
 <?php 
	$q = mysqli_query($koneksi, "select*from produk where id_produk=$id");
	$d = mysqli_fetch_array($q);
 ?>

	<form method="post" action="send.php" target="_blank">
 		<table class="table table-bordered">
 			<tr>
 			<th width="10">Merk</th>
 				<td><input required type="text" name="merk" class="form-control form-group" value="<?php echo $data['merk']; ?>" readonly></td>
 			</tr>

 			<tr>
 			<th width="10">Id Produk</th>
 				<td><input required type="text" name="id_produk" class="form-control form-group" value="<?php echo $data['id_produk']; ?>" readonly></td>
 			</tr>

 			<tr>
 				<th>Nama</th>
 				<td><input required type="text" name="nama" class="form-control form-group" placeholder="Nama Anda"></td>
 			</tr>

 			<tr>
 				<th>Alamat Lengkap</th>
 				<td><textarea rows="6" required name="alamat" class="form-control form-group" placeholder="Masukkan Alamat"></textarea></td>
 			</tr>

 			<tr>
 				<th>Harga Awal</th>
 				<td><input required type="text" name="harga_awal" class="form-control form-group" value="<?php echo $data['harga_awal']; ?>" readonly></td>
 			</tr>


 			<tr>
 				<th>Harga</th>
 				<td><input required type="text" name="harga" class="form-control form-group" value="<?php echo $data['harga']; ?>" readonly></td>
 			</tr>

 			<tr>
 				<th>Jumlah</th>
 				<td><input required type="number" name="jumlah" class="form-control form-group" placeholder="Masukkan Jumlah"></td>
 			</tr>

 			<tr>
 				<th>No Whatsapp <br>Aktif</th>
 				<td><input required type="number" name="no_hp" class="form-control form-group" placeholder="No Whatsapp Aktif"></td>
 			</tr>

 			<input type="hidden" name="no_wa" value="6285658763990">

 			<tr>
 				<th>Ukuran</th>
 				<td>
 					<select required class="form-control form-group" name="ukuran">
 						<option>- Pilih Ukuran Anda -</option>

 						<option>S</option>
 						<option>M</option>
 						<option>L</option>
 						<option>XL</option>
 						<option>XXL</option>
 					</select>
 				</td>
 			</tr>

 			<tr>
 				<th>Metode Pembayaran</th>
 				<td>
 					<select required class="form-control form-group" name="metode_pembayaran">
 						<option>- Pilih Metode Pembayaran -</option>

 						<option>OVO</option>
 						<option>Dana</option>
 						<option>Rekening BRI</option>
 						<option>Rekening BNI</option>
 						<option>Rekening BCA</option>
 					</select>
 				</td>
 			</tr>

 			<tr>
 				<th></th>
 				<td>
 					<button type="submit" class="btn btn-primary" name="submit"></a>Kirim</button>

 					<button type="reset" class="btn btn-danger">Reset</button>
 				</td>
 			</tr>

 		</table>
 	</form>
 </div>
 	<!-- end Form Pembayaran -->

 </div>
  	</div>
   		</div>