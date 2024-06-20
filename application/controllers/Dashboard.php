<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load model atau library yang diperlukan
    }

    public function index() {
        // Load data atau proses yang dibutuhkan untuk halaman beranda
        $data['title'] = 'Dashboard'; // Judul halaman
        $this->load->view('templates/header', $data); // Load header template
        $this->load->view('dashboard'); // Load view 'dashboard.php' dengan data
        $this->load->view('templates/footer'); // Load footer template
    }
}
?>
