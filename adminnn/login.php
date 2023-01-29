<?php 
    include "../koneksi.php";
 ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-6 col-md-9">

                <div class="mt-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 offset-lg-3">
                                <div class="p-5 shadow-lg">
                                    <div class="text-center">
                                        <h1 class="h4 text-light mb-4"><b>LOGIN</b></h1>
                                    </div>

                                    <form class="user" method="post">
                                        <div class="form-group">
                                            <input name="username" type="text" class="form-control form-control-user"
                                                placeholder="Masukkan Username...">
                                        </div>
                                        <div class="form-group">
                                            <input name="password" type="password" class="form-control form-control-user" placeholder="Masukkan Password...">
                                        </div>
                                        <button type="submit" class="btn btn-block rounded-pill btn-success">Login</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>


<?php 
    
     if (isset($_POST['username'])) {
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $cek = mysqli_query($koneksi, "select*from user where username='$username' and password='$password'");

        if (mysqli_num_rows($cek) > 0) {
            $_SESSION['user'] = mysqli_fetch_array($cek);

           echo "<script>
                    Swal.fire({
                          icon: 'success',
                          title: 'Login Berhasil :)',
                          text: 'Silahkan Masuk',
                        }).then((result) => {
                            window.location.href = 'index.php'
                        })
                    </script>";
                }else{
                    echo "<script>
                    Swal.fire({
                          icon: 'error',
                          title: 'Username/Password Salah :(',
                          text: 'Silahkan coba lagi'
                        }).then((result) => {
                            window.location.href = 'login.php'
                        })
                    </script>";
        }
    }

 ?>