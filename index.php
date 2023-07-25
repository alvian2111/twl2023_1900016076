<?php
session_start();

// If the user is not logged in, redirect them to login.php
if (!isset($_SESSION["authenticated"]) || $_SESSION["authenticated"] !== true) {
    header("Location: login.php");
    exit;
}
?>

<?php
include "config.php";

if (isset($_POST["tambah"])) {
    // cek keberhasilan query
    if (pesantiket($_POST) > 0) {
        echo "<script>
        alert('data berhasil ditambah');
        document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
        alert('data gagal diinputkan!');
        document.location.href = 'index.php';
        </script>";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Pemesanan Tiket Wisata</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- External -->
    <link rel="stylesheet" href="./css/style.css">

</head>

<body>
    <!-- Header -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Wisata Kulon Progo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Pesan Tiket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dp.php">Daftar Pesanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
 <!-- Content -->
    <div class="container">
        <div class="container py-5">
            <h1 class="text-center">Wisata Kulon Progo</h1>
            <div class="row row-cols-1 row-cols-md-3 g-4 py-5">
                <div class="col">
                    <div class="card">
                        <img src="./img/ws1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Kedung Pedut Waterfall</h5>
                            <p class="card-text">Air terjun dua warna yang letaknya cukup tersembunyi antara lain karena
                                warna yang unik.</p>
                        </div>
                        <div class="mb-5 d-flex justify-content-around">
                            <h3>50.000</h3>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reservationModal"
                                value="50.000">Pesan</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="./img/ws2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Kebun Teh Nglinggo</h5>
                            <p class="card-text">Menyajikan pemandangan perkebunan teh rakyat dengan udara yang bersih
                                dan sangat sejuk. di ketinggian 900 mdpl.</p>
                        </div>
                        <div class="mb-5 d-flex justify-content-around">
                            <h3>30.000</h3>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reservationModal"
                                value="30.000">Pesan</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="./img/ws3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Taman Sungai Mudal</h5>
                            <p class="card-text">wisata alam yang menawarkan pesona kolam pemandian yang bersumber dari
                                mata air alami.</p>
                        </div>
                        <div class="mb-5 d-flex justify-content-around">
                            <h3>70.000</h3>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reservationModal"
                                value="70.000">Pesan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Form -->
    <div class="modal fade" id="reservationModal" tabindex="-1" role="dialog" aria-labelledby="reservationModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="reservationModalLabel">Reservasi Tiket Wisata</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="POST">
                    <div class="modal-body">
                        <!-- Your form goes here -->

                        <div class="form-group">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama Anda">
                        </div>
                        <div class="form-group">
                            <label for="noidn">No Identitas</label>
                            <input type="number" class="form-control" id="noidn" name="noidn" placeholder="Masukkan email Anda"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="nohp">No Hp</label>
                            <input type="number" class="form-control" id="nohp" name="nohp" placeholder="Masukkan email Anda">
                        </div>
                        <div class="form-group">
                            <label for="tempatwisata">Tempat Wisata</label>
                            <input type="text" class="form-control" id="tempatwisata" name="tempatwisata" readonly>
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal Kunjungan</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal" min="<?php echo date('Y-m-d'); ?>">
                        </div>
                        <div class="form-group">
                            <label for="jumlah_dewasa">Jumlah Pengunjung Dewasa</label>
                            <input type="number" class="form-control" id="jumlah_dewasa" name="jumlah_dewasa"
                                placeholder="Masukkan jumlah pengunjung dewasa">
                        </div>
                        <div class="form-group">
                            <label for="jumlah_anak">Jumlah Anak-anak</label>
                            <input type="number" class="form-control" id="jumlah_anak" name="jumlah_anak"
                                placeholder="Masukkan jumlah anak-anak">
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga Tiket</label>
                            <input type="number" class="form-control" id="harga" readonly>
                        </div>
                        <div class="form-group">
                            <label for="total_bayar">Total Bayar</label>
                            <input type="text" class="form-control" id="total_bayar" name="total_bayar" readonly>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary" name="tambah">Pesan</button>
                        </div>

                </form>
            </div>

        </div>
    </div>
    </div>

    <!-- Footer -->
    <footer class="bg-primary text-light py-3 fixed-bottom">
        <div class="container text-center">
            <p>&copy; 2023 Your Company. All rights reserved.</p>
        </div>
    </footer>




    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="Script.js"></script>
</body>

</html>