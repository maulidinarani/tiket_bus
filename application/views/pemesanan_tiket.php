<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Tiket Bus</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
    <!-- Custom styles -->
    <style>
        body {
            padding-top: 60px;
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        .navbar {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .container {
            background-color: #fff;
            padding: 15px; /* Mengurangi padding untuk memperkecil jarak */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px; /* Penyesuaian untuk membuat form lebih dekat dengan judul */
            margin-bottom: 20px; /* Memberi jarak ke form */
        }
        .bus-layout {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(40px, 1fr));
            gap: 10px;
            margin-top: 20px;
            justify-items: center;
        }
        .seat {
            width: 40px;
            height: 40px;
            background-color: #e9ecef;
            border: 1px solid #ced4da;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            border-radius: 5px;
            transition: transform 0.2s, background-color 0.2s, box-shadow 0.2s;
        }
        .seat:hover {
            transform: scale(1.1);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .seat.available {
            background-color: #ff7f00; /* Warna orange untuk kursi yang tersedia */
            color: #fff;
        }
        .seat.selected {
            background-color: #007bff;
            color: #fff;
        }
        .seat-row {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 5px;
        }
        .seat-label {
            font-size: 0.8em;
            margin-top: 5px;
        }
        .form-group label {
            font-weight: bold;
        }
        .btn-primary {
            background-color: #28a745; /* Warna hijau untuk button */
            border-color: #28a745;
            transition: background-color 0.2s, border-color 0.2s, box-shadow 0.2s;
        }
        .btn-primary:hover {
            background-color: #218838;
            border-color: #218838;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .title-box {
            background-color: #343a40;
            color: #fff;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center; /* Untuk memastikan teks berada di tengah */
        }

        .form-text {
            font-style: italic;
            color: #6c757d; /* Warna abu-abu untuk teks himbauan */
            background-color: #f8f9fa; /* Warna latar belakang himbauan */
            padding: 10px; /* Padding untuk himbauan */
            border-radius: 8px; /* Corner radius untuk himbauan */
            margin-bottom: 20px; /* Jarak antara himbauan dengan form */
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
        /* Centering the submit button */
        .btn-submit-container {
            display: flex;
            justify-content: center;
            margin-top: 20px; /* Margin top for button container */
        }
        .booking-details {
    flex: 1;
    text-align: left; /* Mengatur teks rata kiri */
    color: white; /* Mengatur warna teks putih */
}

.booking-details h5 {
    margin-bottom: 10px;
    color: white; /* Warna teks judul putih */
    font-weight: bold; /* Teks judul tebal (bold) */
}

.booking-details p {
    margin-bottom: 5px;
}

.qr-code {
    text-align: right; /* Mengatur posisi QR code rata kanan */
    flex-shrink: 0;
}

.qr-code img {
    width: 150px; /* Ukuran gambar QR code */
    height: 150px;
    border-radius: 5px;
    border: 2px solid #007bff; /* Garis tepi biru untuk QR code */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
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
    <div class="container">
        <div class="title-box">
            <h1 class="mb-0">Pemesanan Tiket Bus</h1>
        </div>
        
        <!-- Form pemesanan -->
        <form action="#">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" name="nama" id="nama" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal Keberangkatan:</label>
                <input type="date" name="tanggal" id="tanggal" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="waktu">Waktu Keberangkatan:</label>
                <select name="waktu" id="waktu" class="form-control" required>
                    <option value="06:00">06:00</option>
                    <option value="12:00">12:00</option>
                    <option value="18:00">18:00</option>
                </select>
            </div>
            <div class="form-group">
                <label for="asal">Kota Asal:</label>
                <select name="asal" id="asal" class="form-control" required>
                    <option value="jakarta">Jakarta</option>
                    <option value="bandung">Bandung</option>
                    <option value="yogyakarta">Yogyakarta</option>
                    <option value="surabaya">Surabaya</option>
                    <option value="malang">Malang</option>
                    <option value="semarang">Semarang</option>
                    <option value="tegal">Tegal</option>
                    <option value="merak">Merak</option>
                </select>
            </div>
            <div class="form-group">
                <label for="tujuan">Kota Tujuan:</label>
                <select name="tujuan" id="tujuan" class="form-control" required>
                    <option value="jakarta">Jakarta</option>
                    <option value="bandung">Bandung</option>
                    <option value="yogyakarta">Yogyakarta</option>
                    <option value="surabaya">Surabaya</option>
                    <option value="malang">Malang</option>
                    <option value="semarang">Semarang</option>
                    <option value="tegal">Tegal</option>
                    <option value="merak">Merak</option>
                </select>
            </div>
            <div class="form-group">
                <label for="kategori">Kategori Bus:</label>
                <select name="kategori" id="kategori" class="form-control" required onchange="updateSeatLayout()">
                    <option value="ekonomi">Ekonomi (60 kursi)</option>
                    <option value="bisnis">Bisnis (40 kursi)</option>
                    <option value="vip">VIP (30 kursi)</option>
                    <option value="eksekutif">Eksekutif (20 kursi)</option>
                    <option value="sleeper">Sleeper Class (12 kursi)</option>
                </select>
            </div>
            <div class="form-group">
                <label for="jumlah_tiket">Jumlah Tiket:</label>
                <input type="number" name="jumlah_tiket" id="jumlah_tiket" class="form-control" min="1" max="60" value="1" required>
            </div>
            <div class="form-group">
                <label for="kursi">Pilih Kursi:</label>
                <div id="seatSelection" class="bus-layout">
                    <!-- Kursi akan ditampilkan berdasarkan kategori bus dan jumlah tiket yang dipilih -->
                </div>
                <input type="hidden" name="kursi[]" id="selectedSeat" required>
            </div>

            <!-- Info message -->
            <div class="info-message mt-3">
                <i class="fas fa-info-circle"></i>
                <span> Pilih kursi dengan mengklik kursi yang tersedia di atas. </span>
            </div>

            <!-- Button container for centering -->
            <div class="btn-submit-container">
                <button type="submit" class="btn btn-success">Pesan Tiket</button>
            </div>
        </form>
    </div>

    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Script untuk pemilihan kursi -->
    <script>
    function updateSeatLayout() {
        var kategori = document.getElementById('kategori').value;
        var jumlah_tiket = parseInt(document.getElementById('jumlah_tiket').value); // Ensure jumlah_tiket is parsed as integer
        var seatSelection = document.getElementById('seatSelection');
        var html = '';

        var totalSeats;
        var seatsPerRow;

        switch (kategori) {
            case 'ekonomi':
                totalSeats = 60;
                seatsPerRow = 12;
                break;
            case 'bisnis':
                totalSeats = 40;
                seatsPerRow = 10;
                break;
            case 'vip':
                totalSeats = 30;
                seatsPerRow = 8;
                break;
            case 'eksekutif':
                totalSeats = 20;
                seatsPerRow = 10;
                break;
            case 'sleeper':
                totalSeats = 12;
                seatsPerRow = 6;
                break;
            default:
                totalSeats = 0;
                seatsPerRow = 6;
        }

        var numShafts = Math.ceil(totalSeats / seatsPerRow);

        var seatNumber = 1;
        for (var shaft = 0; shaft < numShafts; shaft++) {
            html += '<div class="bus-shaft">';
            
            for (var i = 0; i < seatsPerRow; i++) {
                if (seatNumber <= totalSeats) {
                    var seat_label = String.fromCharCode(65 + shaft) + (i + 1);
                    html += '<div class="seat available" data-seat="' + seat_label + '">' + seat_label + '</div>';
                } else {
                    html += '<div class="seat"></div>';
                }
                seatNumber++;
            }

            html += '</div>';
        }

        seatSelection.innerHTML = html;

        $('.seat.available').click(function() {
            var selectedSeats = $('.seat.selected').length;
            if (selectedSeats < jumlah_tiket || $(this).hasClass('selected')) { // Allow selection if less than jumlah_tiket or deselection
                $(this).toggleClass('selected');
                $('#selectedSeat').val($('.seat.selected').map(function() {
                    return $(this).data('seat');
                }).get().join(', '));
            }
        });
    }

    $(document).ready(function() {
        updateSeatLayout();

        $('#jumlah_tiket').change(function() {
            updateSeatLayout(); // Update seat layout when jumlah_tiket changes
        });
    });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/qrious/4.0.2/qrious.min.js"></script>
<script>
function calculatePrice() {
    var hargaDasar = 0;
    var asal = document.getElementById('asal').value;
    var tujuan = document.getElementById('tujuan').value;
    var kategori = document.getElementById('kategori').value;
    var jumlah_tiket = parseInt(document.getElementById('jumlah_tiket').value);

    // Menghitung harga berdasarkan rute
    switch (asal + '-' + tujuan) {
        case 'jakarta-bandung':
            hargaDasar = 150000;
            break;
        case 'bandung-jakarta':
            hargaDasar = 130000;
            break;
        case 'jakarta-yogyakarta':
            hargaDasar = 180000;
            break;
        case 'yogyakarta-jakarta':
            hargaDasar = 170000;
            break;
        case 'jakarta-surabaya':
            hargaDasar = 280000;
            break;
        case 'surabaya-jakarta':
            hargaDasar = 275000;
            break;
        case 'jakarta-malang':
            hargaDasar = 260000;
            break;
        case 'malang-jakarta':
            hargaDasar = 255000;
            break;
        case 'jakarta-semarang':
            hargaDasar = 200000;
            break;
        case 'semarang-jakarta':
            hargaDasar = 195000;
            break;
        case 'jakarta-tegal':
            hargaDasar = 160000;
            break;
        case 'tegal-jakarta':
            hargaDasar = 155000;
            break;
        case 'jakarta-merak':
            hargaDasar = 130000;
            break;
        case 'merak-jakarta':
            hargaDasar = 125000;
            break;
        case 'malang-surabaya':
            hargaDasar = 100000;
            break;
        default:
            hargaDasar = 0;
            break;
    }

    // Menghitung harga tambahan berdasarkan kategori bus
    switch (kategori) {
        case 'ekonomi':
            hargaDasar += 100000;
            break;
        case 'bisnis':
            hargaDasar += 200000;
            break;
        case 'vip':
            hargaDasar += 250000;
            break;
        case 'eksekutif':
            hargaDasar += 300000;
            break;
        case 'sleeper':
            hargaDasar += 350000;
            break;
        default:
            hargaDasar += 0;
            break;
    }

    // Menghitung total harga
    var totalHarga = hargaDasar * jumlah_tiket;

    return totalHarga;
}

// Event listener untuk menghitung harga saat form di-submit
$(document).ready(function() {
    $('form').submit(function(e) {
        e.preventDefault(); // Mencegah form untuk submit secara default

        // Mengambil data dari form
        var nama = $('#nama').val();
        var tanggal = $('#tanggal').val();
        var waktu = $('#waktu').val();
        var asal = $('#asal option:selected').text();
        var tujuan = $('#tujuan option:selected').text();
        var kategori = $('#kategori option:selected').text();
        var jumlah_tiket = $('#jumlah_tiket').val();
        var kursi = $('#selectedSeat').val();

        // Menghitung harga tiket
        var harga = calculatePrice();

        // Konfirmasi pemesanan
        var confirmation = confirm(`Harga total pemesanan tiket adalah Rp. ${harga.toLocaleString()}. Apakah Anda ingin melanjutkan?`);

        if (confirmation) {
            // Membuat data untuk QR Code
            var qrData = `Nama:${nama},Tanggal:${tanggal},Waktu:${waktu},Asal:${asal},Tujuan:${tujuan},Kategori:${kategori},Jumlah:${jumlah_tiket},Kursi:${kursi}`;

            // Membuat QR Code untuk detail pemesanan
            var qr = new QRious({
                value: qrData,
                size: 200
            });

            // Menampilkan hasil detail pemesanan
            var hasil = `
                <div class="info-message mt-3 d-flex justify-content-between align-items-start">
                    <div class="booking-details">
                        <h5>Detail Pemesanan Tiket</h5>
                        <p>Nama: ${nama}</p>
                        <p>Tanggal Keberangkatan: ${tanggal}</p>
                        <p>Waktu Keberangkatan: ${waktu}</p>
                        <p>Rute: ${asal} - ${tujuan}</p>
                        <p>Kategori Bus: ${kategori}</p>
                        <p>Jumlah Tiket: ${jumlah_tiket}</p>
                        <p>Kursi: ${kursi}</p>
                    </div>
                    <div class="qr-code">
                        <img src="${qr.toDataURL()}" alt="QR Code Detail Pemesanan">
                    </div>
                </div>
            `;

            // Menyimpan detail pemesanan ke localStorage
            var bookingHistory = JSON.parse(localStorage.getItem('bookingHistory')) || [];
            bookingHistory.push({
                nama: nama,
                tanggal: tanggal,
                waktu: waktu,
                asal: asal,
                tujuan: tujuan,
                kategori: kategori,
                jumlah_tiket: jumlah_tiket,
                kursi: kursi,
                qrData: qr.toDataURL()
            });
            localStorage.setItem('bookingHistory', JSON.stringify(bookingHistory));

            // Menampilkan hasil di dalam container
            $('.container').html(hasil);
        }
    });
});

</script>



</body>
</html>
