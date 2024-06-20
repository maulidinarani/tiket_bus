<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class History extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load model atau library yang diperlukan jika ada
    }

    public function index() {
        // Load data atau proses yang dibutuhkan untuk halaman riwayat pemesanan
        $data['title'] = 'Riwayat Pemesanan'; // Judul halaman
        $this->load->view('templates/header', $data); // Load header template
        $this->load->view('history'); // Load view 'history.php' dengan data
        $this->load->view('templates/footer'); // Load footer template
    }
}
