<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayat_Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load model atau helper jika diperlukan
    }

    public function index() {
        // Load view 'riwayat_pemesanan.php' di folder 'views/admin'
        $this->load->view('admin/riwayat_pemesanan');
    }

}
?>
