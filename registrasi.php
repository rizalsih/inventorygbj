<?php
require 'fungsi.php';
require 'cek.php';
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrasi</title>
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">

    <!-- css boostrap 5.3 -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">STOCKSIH !</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Daftar
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="barang.php"> Barang</a></li>
                            <li><a class="dropdown-item" href="pelanggan.php"> Pelanggan</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Transaksi
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="masuk.php"> Barang Masuk</a></li>
                            <li><a class="dropdown-item" href="keluar.php"> Barang Keluar</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="laporan.php"><i class="bi bi-bookmarks-fill"></i>
                                    Laporan</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Profil
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-person-fill"></i> Profil</a></li>
                            <li><a class="dropdown-item" href="registrasi.php"><i class="bi bi-person-plus-fill"></i>
                                    Registrasi</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="logout.php"><i class="bi bi-door-open-fill"></i> Logout
                                    !</a></li>
                        </ul>
                    </li>
                </ul>

                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>

            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <h1 class="mt-4">HALAMAN REGISTRASI BELUM DIVALIDASI NIH !</h1>
    </div>

    <div class="footer  fixed-bottom">
        <a class="link-offset-2 link-underline link-underline-opacity-0 text-center" href="https://github.com/rizalsih?tab=repositories">
            <p class="mt-5 mb-3 text-body-secondary">copyright &copy; rizalsih</p>
        </a>
    </div>


    <!-- Boostrap js -->
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>