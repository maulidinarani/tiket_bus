<?php $this->load->view('templates/header', ['title' => 'Admin Riwayat']); ?>
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
        .ticket {
            border: 2px dashed #333;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            background-color: #f9f9f9;
            position: relative;
        }
        .ticket::before, .ticket::after {
            content: '';
            width: 20px;
            height: 20px;
            background-color: #f9f9f9;
            border: 2px dashed #333;
            border-radius: 50%;
            position: absolute;
        }
        .ticket::before {
            top: -10px;
            left: 50%;
            transform: translateX(-50%);
        }
        .ticket::after {
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
        }
        .booking-details {
            flex: 1;
        }
        .qr-code {
            margin-left: 20px;
        }
        .booking-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .page-title {
            margin-bottom: 30px; /* Menambahkan jarak antara judul halaman dan tiket */
        }
        .delete-button {
            cursor: pointer;
            color: red;
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

    <!-- Main content -->
    <div class="container mt-5">
        <h1 class="page-title">Riwayat Pemesanan</h1>
        <div id="historyContainer">
            <!-- Riwayat pemesanan akan ditampilkan di sini -->
        </div>
    </div>

    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Script untuk menampilkan riwayat pemesanan -->
    <script>
        $(document).ready(function() {
            var bookingHistory = JSON.parse(localStorage.getItem('bookingHistory')) || [];

            function renderHistory() {
                var historyContent = '';

                bookingHistory.forEach(function(booking, index) {
                    // Tanggal dan waktu sekarang
                    var now = new Date();
                    // Tanggal dan waktu tiket kadaluwarsa (misalnya 7 hari setelah pemesanan)
                    var expirationDate = new Date(booking.tanggal);
                    expirationDate.setDate(expirationDate.getDate() + 7);

                    // Memeriksa apakah tiket sudah kadaluwarsa
                    if (now > expirationDate) {
                        // Hapus tiket yang sudah kadaluwarsa dari localStorage
                        bookingHistory.splice(index, 1);
                        localStorage.setItem('bookingHistory', JSON.stringify(bookingHistory));
                        return; // Menghentikan iterasi untuk tiket yang sudah dihapus
                    }

                    historyContent += `
                        <div class="ticket">
                            <div class="booking-item">
                                <div class="booking-details">
                                    <p><strong>Nama:</strong> ${booking.nama}</p>
                                    <p><strong>Tanggal:</strong> ${booking.tanggal}</p>
                                    <p><strong>Waktu:</strong> ${booking.waktu}</p>
                                    <p><strong>Rute:</strong> ${booking.asal} - ${booking.tujuan}</p>
                                    <p><strong>Kategori:</strong> ${booking.kategori} (${booking.kursi})</p>
                                    <p><strong>Jumlah Tiket:</strong> ${booking.jumlah_tiket}</p>
                                    <p><strong>Kursi:</strong> ${booking.kursi}</p>
                                </div>
                                <div class="qr-code">
                                    <img src="${booking.qrData}" alt="QR Code Detail Pemesanan">
                                </div>
                                <div class="delete-button" data-index="${index}">
                                    <i class="fas fa-trash-alt"></i> Hapus
                                </div>
                            </div>
                        </div>
                    `;
                });

                $('#historyContainer').html(historyContent);

                // Menambahkan event listener untuk tombol hapus
                $('.delete-button').click(function() {
                    var index = $(this).data('index');
                    bookingHistory.splice(index, 1);
                    localStorage.setItem('bookingHistory', JSON.stringify(bookingHistory));
                    renderHistory(); // Memuat ulang riwayat setelah menghapus
                });
            }

            renderHistory(); // Memuat riwayat pemesanan saat dokumen siap
        });
    </script>
</body>
</html>
