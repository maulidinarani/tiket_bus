<?php
// application/controllers/Auth.php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function login() {
        $this->load->view('login');
    }

    public function do_login() {
        // Ambil data dari form login
        $email = $this->input->post('email');
        $password = $this->input->post('password');
    
        // Cek apakah ini admin
        if ($email == 'admin@gmail.com' && $password == 'admin123') {
            // Set session untuk admin
            $this->session->set_userdata('user_id', 1); // ID admin bisa diganti sesuai kebutuhan
            $this->session->set_userdata('user_email', $email);
            $this->session->set_userdata('user_role', 'admin');
            redirect('admin/dashboard'); // Redirect ke halaman beranda admin
        }
    
        // Cari pengguna berdasarkan email
        $user = $this->User_model->get_user_by_email($email);
    
        // Verifikasi password
        if ($user && password_verify($password, $user->password)) {
            // Jika password benar, set session pengguna
            $this->session->set_userdata('user_id', $user->id);
            $this->session->set_userdata('user_email', $user->email);
            $this->session->set_userdata('user_role', $user->role);
            
            // Redirect berdasarkan role pengguna
            if ($user->role == 'admin') {
                redirect('admin/dashboard'); // Redirect ke halaman beranda admin
            } else {
                redirect('dashboard/index'); // Redirect ke halaman setelah login sukses untuk pengguna biasa
            }
        } else {
            // Jika pengguna tidak ditemukan atau password salah
            $this->session->set_flashdata('error', 'Email atau password salah.');
            redirect('auth/login'); // Redirect kembali ke halaman login
        }
    }
    

    public function logout() {
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('user_email');
        $this->session->unset_userdata('user_role');
        redirect('auth/login'); // Redirect ke halaman login setelah logout
    }
}
?>
