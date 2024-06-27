<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil_Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load model, jika diperlukan
        // $this->load->model('nama_model');
    }

    public function index() {
        // Ambil data admin yang sedang login (misalnya dari session atau model)
        $data['email'] = 'admin@example.com'; // Ganti dengan cara mengambil email admin yang sesuai

        // Load view dengan data yang diperlukan
        $this->load->view('admin/profile', $data);
    }
}
