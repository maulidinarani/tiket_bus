<?php
// application/controllers/Admin.php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Pastikan user yang login adalah admin
        if ($this->session->userdata('user_role') != 'admin') {
            redirect('auth/login');
        }
    }

    public function dashboard() {
        $this->load->view('admin/dashboard');
    }
}
?>
