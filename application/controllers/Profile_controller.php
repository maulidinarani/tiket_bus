<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load model atau library yang diperlukan
        $this->load->model('user_model'); // Misalnya, jika diperlukan untuk mengambil data pengguna
    }

    public function index() {
        // Mendapatkan email dari session
        $email = $this->session->userdata('user_email');

        // Load data pengguna dari model berdasarkan email
        $data['user'] = $this->user_model->get_user_by_email($email);
        $data['email'] = $email; // Kirim email ke view

        // Load view 'profile.php' dengan data
        $this->load->view('profile', $data);
    }
}


?>
