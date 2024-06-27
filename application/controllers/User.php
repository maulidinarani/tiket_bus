<?php
// application/controllers/User.php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Pastikan user yang login adalah pengguna biasa
        if ($this->session->userdata('user_role') != 'user') {
            redirect('auth/login');
        }
    }

    public function dashboard() {
        $this->load->view('user/dashboard');
    }
}
?>
