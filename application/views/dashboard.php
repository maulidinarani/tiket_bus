<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Custom styles -->
    <style>
        /* Custom CSS styles */
        body {
            padding-top: 60px; /* Padding top for fixed navbar */
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
                    <a class="nav-link" href="<?php echo site_url('tickets'); ?>">Daftar Tiket</a> <!-- Perbarui link ini -->
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
    <div class="container mt-5">
        <h1>Welcome to Dashboard</h1>
        <p>This is a typical dashboard page with a navigation bar and main content.</p>
    </div>

    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
