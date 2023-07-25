
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
                        <a class="nav-link" href="index.html">Pesan Tiket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dp.php">Daftar Pesanan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!doctype html>
<html lang="en">

<head>
    <!-- Include the necessary CSS, JavaScript, and other meta tags if needed -->
</head>

<body>
    <!-- Display the "Daftar Pesanan" table -->
    <div class="container mt-5">
        <h2>Daftar Pesanan</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">No Identitas</th>
                    <th scope="col">No Hp</th>
                    <th scope="col">Tanggal Kunjungan</th>
                    <th scope="col">Jumlah Dewasa</th>
                    <th scope="col">Jumlah Anak-anak</th>
                    <th scope="col">Total Bayar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Include the 'config.php' to use the query function
                include "config.php";

                // Get the reservation data from the database
                $daftarPesanan = query("SELECT * FROM reservasi");

                // Loop through each reservation and display it in the table
                foreach ($daftarPesanan as $pesanan) {
                    echo "<tr>";
                    echo "<td>" . $pesanan['nama'] . "</td>";
                    echo "<td>" . $pesanan['noidentitas'] . "</td>";
                    echo "<td>" . $pesanan['nohp'] . "</td>";
                    echo "<td>" . $pesanan['tglkunjungan'] . "</td>";
                    echo "<td>" . $pesanan['jmldewasa'] . "</td>";
                    echo "<td>" . $pesanan['jmlanak'] . "</td>";
                    echo "<td>" . $pesanan['totalbayar'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Include the necessary JavaScript and footer if needed -->
</body>

</html>

</body>