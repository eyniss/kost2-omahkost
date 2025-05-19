<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // Fungsi untuk registrasi pengguna baru (dipakai oleh controller)
    public function register_user($data) {
        return $this->db->insert('users', $data); // Sesuaikan nama tabel 
    }

    // Fungsi untuk cek apakah email sudah terdaftar
    public function is_email_exists($email) {
        $this->db->where('emailaddress', $email);
        $query = $this->db->get('users');
        return $query->num_rows() > 0;
    }

    // Fungsi untuk login
    public function login($email, $password) {
        $this->db->where('emailaddress', $email);
        $query = $this->db->get('users'); // Mencari user dengan email yang diberikan

        if ($query->num_rows() > 0) {
            $user = $query->row(); // Mengambil data user pertama
            if (password_verify($password, $user->password)) { // Verifikasi password
                return $user; // Jika password benar, kembalikan data user
            }
        }
        return false; // Jika login gagal, kembalikan false
    }
}
?>
