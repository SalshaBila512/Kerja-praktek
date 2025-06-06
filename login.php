<?php 
    require 'function.php';

    // Cek Login Berhasil Atau Tidak
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Mencocokkan Dengan Database, Apakah Data Ada Atau Tidak
        $cekdatabase = mysqli_query($conn, "SELECT * FROM login where email='$email' and password='$password'");
        // Hitung Jumlah Data
        $hitung = mysqli_num_rows($cekdatabase);

        if($hitung>0){
            // Kalau Data Ditemukan
            $ambildatalevel = mysqli_fetch_array($cekdatabase);
            $level = $ambildatalevel['level'];
            // $nama_user = $ambildatalevel['nama_user'];

            if($level == '1'){
                // Kalau dia Admin, maka
                $_SESSION['log'] = 'Logged';
                $_SESSION['level'] = '1';
                // $_SESSION['nama_user'] = $ambildatalevel['nama_user'];
                header('location:admin.php');
            } 
            if($level == '2') {
                // Kalau dia Guru, maka
                $_SESSION['log'] = 'Logged';
                $_SESSION['level'] = '2';
                header('location:admin.php');
            }
            if($level == '3') {
                // Kalau dia Guru, maka
                $_SESSION['log'] = 'Logged';
                $_SESSION['level'] = '3';
                header('location:admin.php');
            }
        } else{
            // Kalau data tidak ditemukan
            echo 'Data tidak ditemukan';
        }
    };

    
    if(!isset($_SESSION['log'])){

    } else {
        header('location:admin.php'); // Jika Sudah Login, Langsung Redirect
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Dashboard</title>
    <!-- CSS -->
    <link rel="stylesheet" href="./assets/css/login.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <section class="vh-100">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
            <!-- <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
            class="img-fluid" alt="Sample image"> -->
            <img src="./assets/images/zindani.jpeg" class="img-fluid" alt="">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
            <h2 class="text-center">Login Admin Taud Rabbani Depok</h2>
            <hr color="purple" size="5">
            <br>
            <form method="post">
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example3">Email address</label>
                    <input type="email" name="email" id="form3Example3" class="form-control form-control-lg"
                    placeholder="Enter a valid email address" />
                </div>

                <!-- Password input -->
                <div class="form-outline mb-3">
                    <label class="form-label" for="form3Example4">Password</label>
                    <input type="password" name="password" id="form3Example4" class="form-control form-control-lg"
                    placeholder="Enter password" />
                </div>
                <div class="text-center text-lg-start mt-4 pt-2">
                    <button name="login" class="btn btn-primary btn-lg"
                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                    <br>
                    <a href="index.php" class="btn btn-secondary btn-lg mt-3"
                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Kembali ke Home</a>
                </div>
            </form>
        </div>
        </div>
    </div>
    <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-success">
        <!-- Copyright -->
        <div class="text-white mb-3 mb-md-0">
        Copyright © 2023. All rights reserved.
        </div>
        <!-- Copyright -->
    </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>
