<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load model atau library yang diperlukan
    }

    public function index() {
        // Load data atau proses yang dibutuhkan untuk halaman pemesanan tiket
        $data['title'] = 'Pemesanan Tiket'; // Judul halaman
        $this->load->view('templates/header', $data); // Load header template
        $this->load->view('pemesanan_tiket'); // Load view 'pemesanan_tiket.php' dengan data
        $this->load->view('templates/footer'); // Load footer template
    }
}
?>
