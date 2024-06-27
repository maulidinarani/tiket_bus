<?php $this->load->view('templates/header', ['title' => 'Admin Dashboard']); ?>
<?php $this->load->view('templates/footer'); ?>

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
        .navbar,
        .welcome-section {
            background-color: #343a40; /* Warna latar belakang navbar */
            color: #ffffff; /* Warna teks putih */
        }
        .welcome-section {
            padding: 100px 0;
            text-align: center;
        }
        .footer {
            background-color: #ff8c00; /* Warna latar belakang oren */
            color: #fff;
            padding: 50px 0;
        }
        .footer-content {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }
        .footer-section {
            flex: 1 0 30%; /* Three columns on larger screens */
            padding: 0 15px;
            text-align: center; /* Teks di bagian tengah */
            display: flex;
            flex-direction: column;
            justify-content: center; /* Teks di tengah secara vertikal */
            margin-bottom: 20px; /* Margin bottom untuk spasi antar kolom pada layar kecil */
        }
        .footer-section h3 {
            color: #fff;
            font-size: 18px;
            margin-bottom: 20px;
        }
        .footer-section p {
            font-size: 14px;
            line-height: 1.6;
            color: #ccc;
        }
        .social-icons {
            list-style-type: none;
            padding: 0;
            margin: 0;
            text-align: center; /* Ikonya rata di tengah */
        }
        .social-icons li {
            display: inline-block;
            margin-right: 10px;
        }
        .social-icons li a {
            color: #ccc;
            font-size: 20px;
            transition: color 0.3s ease;
        }
        .social-icons li a:hover {
            color: #fff;
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
            <!-- Logo Akun -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('profil_admin'); ?>">
                    <i class="fas fa-user-circle fa-lg"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('auth/logout'); ?>">
                    <i class="fas fa-sign-out-alt"></i>
                </a>
            </li>
        </ul>
    </div>
</nav>

    <!-- Welcome Section -->
    <section class="welcome-section">
        <div class="container">
            <h1>Selamat Datang, Admin</h1>
            <p>Ini adalah halaman beranda untuk admin.</p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row footer-content">
                <div class="col-md-4 footer-section">
                    <h3>Tentang Kami</h3>
                    <p>TIKBOOS adalah platform untuk memesan tiket bus perjalanan dengan mudah dan cepat.</p>
                </div>
                <div class="col-md-4 footer-section">
                    <h3>Hubungi Kami</h3>
                    <div class="contact-info">
                        <p>Email: infotikboos@gmail.com</p>
                        <p>Telepon: 123-456-7890</p>
                    </div>
                </div>
                <div class="col-md-4 footer-section">
                    <h3>Sosial Media</h3>
                    <ul class="social-icons">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
