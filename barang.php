<?php
require 'fungsi.php';
require 'cek.php';
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Barang</title>
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">

    <!-- css boostrap 5.3 -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- icons boostrap 5.3 -->
    <link href="dist/icon/font/bootstrap-icons.css" rel="stylesheet">

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

        <!-- DataTales Example -->
        <div class="card shadow mb-4 mt-4">
            <div class="card-header py-3">
                <h2 class="m-0 mb-3 font-weight-bold text-primary">Daftar Barang</h2>
                <!-- Tombol modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Tambah Barang
                </button>
                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Barang !</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="post">
                                    <input type="text" name="namabarang" class="form-control mb-2" placeholder="Artikel"
                                        autocomplete="off" required>
                                    <input type="text" name="deskripsi" class="form-control mb-2"
                                        placeholder="Deskripsi" autocomplete="off" required>
                                    <input type="text" name="ket" class="form-control mb-2" placeholder="Keterangan"
                                        autocomplete="off" required>
                                    <input type="number" name="stock" class="form-control mb-2" placeholder="Stock"
                                        autocomplete="off" required>
                                    <input type="text" name="sat" class="form-control mb-2" placeholder="Satuan"
                                        autocomplete="off" required>
                                    <button type="submit" name="addnewbarang" class="btn btn-primary">Tambah</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Artikel</th>
                                <th>Deskripsi</th>
                                <th>Keterangan</th>
                                <th>Stock</th>
                                <th>Satuan</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $ambilsemuadatastock = mysqli_query($conn, "select * from stock");
                            while ($data = mysqli_fetch_array($ambilsemuadatastock)) {
                                $i = 1;
                                $namabarang = $data['namabarang'];
                                $deskripsi = $data['deskripsi'];
                                $ket = $data['ket'];
                                $stock = $data['stock'];
                                $sat = $data['sat'];
                            ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $namabarang; ?></td>
                                <td><?= $deskripsi; ?></td>
                                <td><?= $ket; ?></td>
                                <td><?= $stock; ?></td>
                                <td><?= $sat; ?></td>
                            </tr>
                            <?php

                            };
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <div class="footer  fixed-bottom">
        <a class="link-offset-2 link-underline link-underline-opacity-0 text-center"
            href="https://github.com/rizalsih?tab=repositories">
            <p class="mt-5 mb-3 text-body-secondary">copyright &copy; rizalsih</p>
        </a>
    </div>
    

    <!-- Boostrap js -->
    <script src="dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>