<?php
ob_start(); // Buffer output
error_reporting(0); // Nonaktifkan error reporting untuk production
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * @property User_model $User_model
 * @property CI_Input $input
 * @property CI_Session $session
 * @property CI_Form_validation $form_validation
 **/

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');

        //     $this->load->library('session');
    }


    public function signup_form()
    {
        // Menampilkan halaman form signup
        $this->load->view('signup_form');
    }



    // Fungsi registrasi
    public function registrasi_user()
    {
        // Ambil data dari form
        $name = $this->input->post('name');
        $email = $this->input->post('emailaddress');
        $password = $this->input->post('password');
        $confirm_password = $this->input->post('confirm_password');

        // Validasi: semua field harus diisi
        if (empty($name) || empty($email) || empty($password) || empty($confirm_password)) {
            $this->session->set_flashdata('message', 'Please fill in all fields.');
            redirect('auth/signup_form'); // Redirect ke halaman signup
            return;
        }


        // Validasi sederhana: misal password dan konfirmasi harus sama
        if ($password !== $confirm_password) {
            $this->session->set_flashdata('message', 'Password and confirm password do not match.');
            redirect('auth/signup_form');
            return;
        }

        // Validasi: email belum terdaftar
        if ($this->User_model->is_email_exists($email)) {
            $this->session->set_flashdata('message', 'Email is already registered.');
            redirect('auth/signup_form');
            return;
        }

        // Hash password
        $password_hash = password_hash($password, PASSWORD_BCRYPT);

        //simpamndata ke database
        $data = [
            'name' => $name,
            'emailaddress' => $email,
            'password' => $password_hash
        ];

        // Simpan ke database menggunakan model, contoh:
        if ($this->User_model->register_user($data)) {
            $this->session->set_flashdata('message', 'Registration successful! You can now log in.');
            redirect('auth/login_form'); // ⬅️ Redirect ke halaman login
        } else {
            $this->session->set_flashdata('message', 'Registration failed. Please try again.');
        }

        redirect('auth/signup_form'); // ⬅️ Redirect ulang jika gagal

    }

    public function login_form()
    {
        // Menampilkan halaman form login
        $this->load->view('login_form');
    }

    // Fungsi login
    public function login()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('login_email', 'Email', 'required|valid_email|trim');
        $this->form_validation->set_rules('login_password', 'Password', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('message', validation_errors());
            redirect('auth/login_form');
            return;
        }

        $email = $this->input->post('login_email', TRUE);
        $password = $this->input->post('login_password', TRUE);

        $user = $this->User_model->login($email, $password);

        if ($user) {
            $this->session->set_userdata([
                'user_id' => $user->id,
                'user_name' => $user->name,
                'user_email' => $user->email,
                'user_role' => $user->role  // simpan role
            ]);



            // Redirect berdasarkan role
            if ($user->role === 'admin') {
                redirect('coba'); // Redirect ke halaman admin
            } else {
                redirect('home'); // Redirect ke halaman user biasa
            }
        } else {
            $this->session->set_flashdata('message', 'Email atau password salah!');
            redirect('auth/login_form');
        }
    }
    // Fungsi untuk menampilkan logout


    public function logout()
    {
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('user_name');
        $this->session->sess_destroy(); // opsional, untuk menghapus semua session
        redirect(base_url()); // arahkan ke halaman utama setelah logout
    }
}
