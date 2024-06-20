<?php
class Register extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index() {
        $this->load->view('register');
    }

    public function do_register() {
        // Ambil data dari form
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        // Cek apakah email sudah terdaftar
        $existing_user = $this->User_model->get_user_by_email($email);
        if ($existing_user) {
            $this->session->set_flashdata('error', 'Email sudah terdaftar. Silakan login.');
            redirect('auth/login');
        }

        // Data untuk disimpan ke database
        $data = [
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT) // Simpan password yang di-hash
        ];

        // Simpan data ke database
        $result = $this->User_model->create_user($data);
        if ($result) {
            $this->session->set_flashdata('signup_success', 'Akun berhasil dibuat. Silakan login.');
            redirect('auth/login');
        } else {
            $this->session->set_flashdata('error', 'Gagal membuat akun. Silakan coba lagi.');
            redirect('auth/login');
        }
    }
}
?>
