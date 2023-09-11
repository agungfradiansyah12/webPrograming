<?php
session_start();
include "koneksi.php";
if(!empty($_SESSION['iduser'])){
    echo "<script>location='.'</script>";
} else{
    if(@$_POST['login']){
        $user = $_POST['txt_username'];
        $pass = md5($_POST['txt_password']);

        $sql = "SELECT * FROM tb_user WHERE username ='$user' AND password= '$pass' ";
        $q = mysqli_query($k,$sql);
        if(mysqli_num_rows($q) > 0){
            $r = mysqli_fetch_assoc($q);
            $_SESSION['iduser']  = $r['id_user'];
            $_SESSION['namauser'] = $r['nama_user'];
            echo "<script>location='.'</script>";
        }else{
            echo "<script>alert('Data yang dimasukkan salah');location='login.php'</script>";
        }
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

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-8 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <img src="../user/assets/img/logo/k2.png" width="100" height="100" alt="">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form class="user" method="POST" action="">
                                        <div class="form-group">
                                            <input type="text" name="txt_username" class="form-control form-control-user" placeholder="Username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="txt_password" class="form-control form-control-user" placeholder="Password">
                                        </div>

                                        <hr>
                                        <input type="submit"  name="login" value="Login" class="btn btn-primary btn-user btn-block">
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
<?php } ?>