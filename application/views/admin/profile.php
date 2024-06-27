<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Admin</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <!-- Custom styles -->
    <style>
        /* Custom CSS styles */
        body {
            padding-top: 60px; /* Padding top for fixed navbar */
            background-color: #ff9800; /* Background warna oren */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Roboto', sans-serif; /* Google font */
        }
        .profile-content {
            text-align: center;
            color: white;
            background-color: #343a40; /* Warna yang sama dengan navbar */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Box shadow */
            transition: transform 0.2s; /* Smooth transform */
        }
        .profile-content:hover {
            transform: scale(1.05); /* Scale up on hover */
        }
        .profile-content .fa-user-circle {
            margin-bottom: 20px;
            transition: color 0.2s; /* Smooth color transition */
        }
        .profile-content .fa-user-circle:hover {
            color: #ff9800; /* Change color on hover */
        }
        .navbar .nav-link {
            font-weight: 500; /* Bold text */
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo site_url('admin/dashboard'); ?>">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('riwayat_admin'); ?>">Riwayat Pemesanan</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('auth/logout'); ?>">
                        <i class="fas fa-sign-out-alt"></i> <!-- Menggunakan ikon logout dari Font Awesome -->
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main content -->
    <div class="profile-content">
        <i class="fas fa-user-circle fa-5x"></i>
        <h2 class="mt-3">
            <?php 
            // Tampilkan email dari data yang dikirim dari controller
            echo !empty($email) ? $email : 'Email tidak tersedia';
            ?>
        </h2>
        <!-- Tampilkan informasi admin lainnya sesuai kebutuhan -->
    </div>

    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
