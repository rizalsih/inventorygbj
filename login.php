<?php
require 'fungsi.php';

//cek
if (isset($_POST['login'])){
    $username = $_POST['username'];
    $pass = $_POST['pass'];

    $cek = mysqli_query($conn, "SELECT * FROM login where username = '$username' and pass = '$pass'");

    $hitung = mysqli_num_rows($cek);

    if ($hitung>0) {
        $_SESSION['log'] = 'true';
        header('location:index.php');
    } else {
        header('location:login.php');
    };
};

if(!isset($_SESSION['log'])) {

} else {
    header('location:index.php');
};

?>


<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>Login</title>
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">

    <!-- css boostrap 5.3 -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block"><img src="img/bg.png" style="width: 450px;"></div>
                            <div class="col-lg-6">
                                <div class="p-4">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Halo Internet !</h1>
                                    </div>
                                    <form method="post">
                                        <div class="form-floating">
                                            <input type="text" name="username" class="form-control mb-4"
                                                id="floatingInput" placeholder="username" autocomplete="off" required>
                                            <label for="floatingInput">username</label>
                                        </div>
                                        <div class="form-floating">
                                            <input type="password" name="pass" class="form-control mb-4"
                                                id="floatingPassword" placeholder="Password" autocomplete="off"
                                                required>
                                            <label for="floatingPassword">Password</label>
                                        </div>
                                        <button class="btn btn-primary w-100 py-2" type="submit" name="login">Sign
                                            in</button>
                                        <a class="link-offset-2 link-underline link-underline-opacity-0 text-center"
                                            href="https://github.com/rizalsih?tab=repositories">
                                            <p class="mt-5 mb-3 text-body-secondary">copyright &copy; rizalsih</p>
                                        </a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>


    <!-- Boostrap js -->
    <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>