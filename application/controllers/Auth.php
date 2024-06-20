<?php
class Auth extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function login() {
        $this->load->view('login');
    }

    public function do_login() {
        // Ambil data dari form login
        $email = $this->input->post('email');
        $password = $this->input->post('password');
    
        // Cari pengguna berdasarkan email
        $user = $this->User_model->get_user_by_email($email);
    
        // Verifikasi password
        if ($user && password_verify($password, $user->password)) {
            // Jika password benar, set session pengguna
            $this->session->set_userdata('user_id', $user->id);
            $this->session->set_userdata('user_email', $user->email); // Simpan email dalam session
            redirect('dashboard'); // Redirect ke halaman setelah login sukses
        } else {
            // Jika pengguna tidak ditemukan atau password salah
            $this->session->set_flashdata('error', 'Email atau password salah.');
            redirect('auth/login'); // Redirect kembali ke halaman login
        }
    }
    
    

    public function logout() {
        $this->session->unset_userdata('user_id');
        redirect('auth/login'); // Redirect ke halaman login setelah logout
    }
}
?>
