<?php
session_start();
//koneksi
$conn = mysqli_connect("localhost", "root", "", "dbstokbrg");

//add barang
if (isset($_POST['addnewbarang'])) {
    $namabarang = htmlspecialchars($_POST['namabarang']);
    $deskripsi = htmlspecialchars($_POST['deskripsi']);
    $ket = htmlspecialchars($_POST['ket']);
    $stock = htmlspecialchars($_POST['stock']);
    $sat = htmlspecialchars($_POST['sat']);

    $addtotable = mysqli_query($conn, "INSERT INTO  stock (namabarang, deskripsi, ket, stock, sat)
    values ('$namabarang', '$deskripsi', '$ket', '$stock', '$sat')");
    if ($addtotable) {
        header('location:barang.php');
    } else {
        echo 'gagal!';
        header('location:barang.php');
    }
}


//add barang masuk
if (isset($_POST['barangmasuk'])) {
    $barangnya =  htmlspecialchars($_POST['barangnya']);
    $qty = htmlspecialchars($_POST['qty']);
    $tanggal = htmlspecialchars($_POST['tanggal']);
    $penerima = htmlspecialchars($_POST['penerima']);


    $cekstocksekarang = mysqli_query($conn, "select * from stock where idbarang ='$barangnya'");
    $ambildatanya = mysqli_fetch_array($cekstocksekarang);

    $stocksekarang = $ambildatanya['stock'];
    $tambahkanstocksekarangdenganqty = $stocksekarang + $qty;

    $addtomasuk = mysqli_query($conn, "insert into masuk (idbarang, tanggal, keterangan, qty)
    values ('$barangnya', '$tanggal', '$penerima', '$qty')");
    $updatestockmasuk = mysqli_query($conn, "update stock set stock='$tambahkanstocksekarangdenganqty'
    where idbarang='$barangnya'");
    if ($addtomasuk && $updatestockmasuk) {
        header('location:masuk.php');
    } else {
        echo 'gagal';
        header('location:masuk.php');
    }
}


//add barang keluar
if (isset($_POST['barangkeluar'])) {
    $barangnya = htmlspecialchars($_POST['barangnya']);
    $qty = htmlspecialchars($_POST['qty']);
    $tanggal = htmlspecialchars($_POST['tanggal']);
    $dikeluarkan = htmlspecialchars($_POST['dikeluarkan']);


    $cekstocksekarang = mysqli_query($conn, "select * from stock where idbarang ='$barangnya'");
    $ambildatanya = mysqli_fetch_array($cekstocksekarang);

    $stocksekarang = $ambildatanya['stock'];
    $keluarkanstocksekarangdenganqty = $stocksekarang - $qty;

    $addtomasuk = mysqli_query($conn, "insert into keluar (idbarang, tanggal, dikeluarkan, qty)
    values ('$barangnya', '$tanggal', '$dikeluarkan', '$qty')");
    $updatestockkeluar = mysqli_query($conn, "update stock set stock='$keluarkanstocksekarangdenganqty'
    where idbarang='$barangnya'");
    if ($addtomasuk && $updatestockkeluar) {
        header('location:keluar.php');
    } else {
        echo 'gagal';
        header('location:keluar.php');
    }
}

?>