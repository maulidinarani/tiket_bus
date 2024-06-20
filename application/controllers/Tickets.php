<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tickets extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load model atau library yang diperlukan
    }

    public function index() {
        $data['title'] = 'Daftar Tiket';
        $this->load->view('templates/header', $data);
        $this->load->view('tickets/tickets_list', $data); // Menampilkan halaman daftar tiket
        $this->load->view('templates/footer');
    }
}
?>
