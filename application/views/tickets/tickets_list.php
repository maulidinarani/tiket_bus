<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Harga Tiket Bus</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Custom styles -->
    <style>
        /* Custom CSS styles */
        body {
            padding-top: 60px; /* Padding top for fixed navbar */
            background-color: #f8f9fa; /* Background color for the body */
        }
        .ticket-table th, .ticket-table td {
            vertical-align: middle;
        }
        .ticket-table .price {
            font-weight: bold;
            color: #343a40; /* Text color for prices */
        }
        .ticket-table .badge {
            font-size: 0.9em;
        }
        .info-alert {
            margin-bottom: 20px;
            background-color: #f8d7da; /* Background color for alert */
            padding: 10px;
            border-radius: 5px;
        }
        .category-info {
            margin-top: 20px;
            border-top: 2px solid #343a40; /* Border color for category info */
            padding-top: 10px;
        }
        .ticket-header {
            background-color: #343a40;
            color: white;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px; /* Mengurangi margin bottom untuk mengurangi jarak */
            width: 100%;
        }
        .info-message {
            background-color: #343a40; /* Background color for info message */
            color: white;
            padding: 15px;
            border-radius: 5px;
            text-align: center;
            margin-bottom: 20px;
        }
        .info-message i {
            margin-right: 10px;
        }
        .container-custom {
            width: 100%;
            max-width: 100%;
            padding-left: 15px;
            padding-right: 15px;
            margin-top: 20px; /* Mengurangi jarak antara navbar dan container */
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo site_url('dashboard'); ?>">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('tickets'); ?>">Daftar Tiket</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('pemesanan'); ?>">Pemesanan Tiket</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('history'); ?>">Riwayat Pemesanan</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <!-- Logo Akun -->
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('profile'); ?>">
                        <i class="fas fa-user-circle fa-lg"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('auth/logout'); ?>">
                        <i class="fas fa-sign-out-alt"></i> <!-- Menggunakan ikon logout dari Font Awesome -->
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main content -->
    <div class="container-fluid container-custom mt-3">
        <div class="ticket-header">
            <h1 class="text-center mb-2">Daftar Harga Tiket Bus</h1>
        </div>
        <!-- Tabel untuk menampilkan daftar tiket -->
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <table class="table table-striped ticket-table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kota Asal</th>
                            <th scope="col">Kota Tujuan</th>
                            <th scope="col">Harga Tiket</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Contoh data tiket untuk tujuan di Pulau Jawa -->
                        <tr>
                            <th scope="row">1</th>
                            <td>Jakarta</td>
                            <td>Bandung</td>
                            <td class="price">Rp 150.000</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Bandung</td>
                            <td>Jakarta</td>
                            <td class="price">Rp 130.000</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Jakarta</td>
                            <td>Yogyakarta</td>
                            <td class="price">Rp 180.000</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Yogyakarta</td>
                            <td>Jakarta</td>
                            <td class="price">Rp 170.000</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Jakarta</td>
                            <td>Surabaya</td>
                            <td class="price">Rp 280.000</td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>Surabaya</td>
                            <td>Jakarta</td>
                            <td class="price">Rp 275.000</td>
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td>Jakarta</td>
                            <td>Malang</td>
                            <td class="price">Rp 260.000</td>
                        </tr>
                        <tr>
                            <th scope="row">8</th>
                            <td>Malang</td>
                            <td>Jakarta</td>
                            <td class="price">Rp 255.000</td>
                        </tr>
                        <tr>
                            <th scope="row">9</th>
                            <td>Jakarta</td>
                            <td>Semarang</td>
                            <td class="price">Rp 200.000</td>
                        </tr>
                        <tr>
                            <th scope="row">10</th>
                            <td>Semarang</td>
                            <td>Jakarta</td>
                            <td class="price">Rp 195.000</td>
                        </tr>
                        <tr>
                            <th scope="row">11</th>
                            <td>Jakarta</td>
                            <td>Tegal</td>
                            <td class="price">Rp 160.000</td>
                        </tr>
                        <tr>
                            <th scope="row">12</th>
                            <td>Tegal</td>
                            <td>Jakarta</td>
                            <td class="price">Rp 155.000</td>
                        </tr>
                        <tr>
                            <th scope="row">13</th>
                            <td>Jakarta</td>
                            <td>Merak</td>
                            <td class="price">Rp 130.000</td>
                        </tr>
                        <tr>
                            <th scope="row">14</th>
                            <td>Merak</td>
                            <td>Jakarta</td>
                            <td class="price">Rp 125.000</td>
                        </tr>
                        <tr>
                            <th scope="row">15</th>
                            <td>Malang</td>
                            <td>Surabaya</td>
                            <td class="price">Rp 100.000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Informasi tentang kategori bus -->
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="category-info text-center mt-4">
                    <p><strong>Informasi Kategori Bus:</strong></p>
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Ekonomi
                            <span class="badge badge-primary badge-pill">Rp 100.000</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Bisnis
                            <span class="badge badge-success badge-pill">Rp 200.000</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            VIP
                            <span class="badge badge-warning badge-pill">Rp 250.000</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Eksekutif
                            <span class="badge badge-info badge-pill">Rp 300.000</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Sleeper Class
                            <span class="badge badge-danger badge-pill">Rp 350.000</span>
                        </li>
                    </ul>
                    <div class="info-message mt-3">
                        <i class="fas fa-info-circle"></i>
                        <span>Harga tiket berbeda berdasarkan kategori bus. Pastikan untuk memilih kategori yang sesuai dengan kebutuhan Anda.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
