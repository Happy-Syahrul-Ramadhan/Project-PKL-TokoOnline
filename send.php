		<?php 
			if (isset($_POST['nama'])) {
				$merk = $_POST['merk'];
				$id_produk = $_POST['id_produk'];
				$nama = $_POST['nama'];
				$alamat = $_POST['alamat'];
				$harga = $_POST['harga'];
				$harga_awal = $_POST['harga_awal'];
				$jumlah = $_POST['jumlah'];
				$no_hp = $_POST['no_hp'];
				$ukuran = $_POST['ukuran'];
				$metode_pembayaran = $_POST['metode_pembayaran'];
				$no_wa = $_POST['no_wa'];
				
				header("location:https://api.whatsapp.com/send?phone=$no_wa&text=*FORM+konfirmasi+pemesanan*%0A-------------------------------%0AHai+admin,+saya+mau+konfirmasi+pemesanan+produk+nih+dengan+:+%0A*Merk*+:+$merk%0A*Id Produk*+:+$id_produk%0A*nama*+:+$nama%0A*Alamat*+:+$alamat%0A*Harga Awal*+:+$harga_awal%0A*Harga Diskon*+:+$harga%0A*jumlah*+:+$jumlah%0A*no+wa*+:+$no_hp%0A*Ukuran*+:+$ukuran%0A*metode+pembayaran*+:+$metode_pembayaran%0A-------------------------------%0AFORM+ini+dikirim+dari+https://ars_cloth.com");
	
			}else{
				echo "<script>
						window.location=history.go(-1);
				</script>";
			}

		 ?>
