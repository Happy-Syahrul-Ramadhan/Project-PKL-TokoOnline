<?php 
    include "../koneksi.php"; 
    if (!isset($_SESSION['user'])) {
     header('location:login.php');
    }
 ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Halaman</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../summernote/summernote-bs4.css">

    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
               
                <div>ArsCloth</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            
              <li class="nav-item">
                <a class="nav-link" href="?page=user">
                    <i class="fas fa-fw fa-user"></i>
                    <span>User</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="?page=tentang">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Tentang</span></a>
            </li>

             <li class="nav-item">
                <a class="nav-link" href="?page=kontak">
                    <i class="fas fa-fw fa-envelope"></i>
                    <span>Kotak Masuk</span></a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="?page=produk">
                    <i class="fas fa-dollar-sign"></i>
                    <span>Produk</span></a>
            </li>

            
             <li class="nav-item">
                <a class="nav-link" href="?page=kategori_produk">
                    <i class="fas fa-clipboard-list"></i>
                    <span>Kategori Produk</span></a>
            </li>

            
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
       
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                   

                    <ul class="navbar-nav ml-auto">
                        <!-- logout -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="dropdown-item" href="logout.php">
                                <i class="fas fa-sign-out-alt fa-sm text-gray-500"></i>  
                                Logout   
                            </a>   
                        </li>
                    </ul>
                </nav>


                <div class="container-fluid">

                <?php 
                    $page = @$_GET['page'];
                    if (file_exists($page . '.php')) {
                        include $page . '.php';
                    }else{
                        include "home.php";
                    }

                 ?>

                 </div>
                <!-- end Table -->

             

           
            <footer class="sticky-footer bg-white mt-4">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy;ArsCloth.com 2021</span>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    
  
    <script src="vendor/jquery/jquery.min.js"></script>

    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="vendor/datatables/jquery.dataTables.min.js"></script>

    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
   
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <script src="js/sb-admin-2.min.js"></script>

    <script type="text/javascript" src="js/demo/datatables-demo.js"></script>

    <script type="text/javascript" src="../summernote/summernote.min.js"></script>

    <script type="text/javascript">
        $(function(){
            $(".textarea").summernote({
                'height':400
            });
        });
    </script>

</body>

</html>
