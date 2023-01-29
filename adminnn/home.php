
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><b>
                            <?php 
                                 if (isset($_SESSION['user'])) {
                                 ?>
                                <table align="center">
                                    <tr>
                                        <th><h3>Selamat Datang: <b>"<?php echo $_SESSION['user']['nama']; ?>"</b> Semoga Harimu Menyenangkan :)</h3></th>
                                    </tr>
                                </table>
                            <?php 
                                }
                             ?>
                        </b></h1>
                    </div>

                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Kategori Produk</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo mysqli_num_rows(mysqli_query($koneksi, "select*from kategori_produk")); ?></div>
                                        </div>
                                        <div class="col-auto">
                                           <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Earnings (Annual) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Produk</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo mysqli_num_rows(mysqli_query($koneksi, "select*from produk")); ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tasks Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Kotak Masuk
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo mysqli_num_rows(mysqli_query($koneksi, "select*from kontak")); ?></div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-envelope fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- User -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                               User</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo mysqli_num_rows(mysqli_query($koneksi, "select*from user")); ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-fw fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>
                 </div>
             </div>



             <!-- Table -->
                <div class="container-fluid">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Produk ArsCloth Terbaru</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Gambar1</th>
                                            <th>Gambar2</th>
                                            <th>Merk</th>
                                            <th>Kategori Produk</th>
                                            <th>Deskripsi</th>
                                            
                                            <th>Harga</th>
                                            <th>harga awal</th>
                                            <th>Dilihat</th>
                                        </tr>
                                    </thead>

                        <?php
                           $query = mysqli_query($koneksi, "select*from produk left join kategori_produk on kategori_produk.id_kategori=produk.id_kategori order by id_produk desc");
                            while ($data = mysqli_fetch_array($query)) {

                            ?>
                                    <tbody>
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
                                            <td><?php echo $data['merk']; ?></td>
                                            <td><?php echo $data['nama_kategori']; ?></td>
                                            <td><?php echo $data['deskripsi']; ?></td>
                                            
                                            <td><?php echo $data['harga']; ?></td>
                                            <td><?php echo $data['harga_awal']; ?></td>
                                            <td><?php echo $data['dilihat']; ?></td>
                                        </tr>
                                    </tbody>
                                    <?php 
                                }
                                     ?>
                                </table>
                            </div>
                        </div>
                    </div>