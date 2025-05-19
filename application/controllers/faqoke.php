<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faqoke extends CI_Controller {


    // Fungsi untuk menampilkan halaman FAQ

    public function index() {
        $this->load->view('partials/header');
        $this->load->view('faqoke_view');
        $this->load->view('partials/footer'); 
    }
}
