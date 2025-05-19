<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class katalog extends CI_Controller {


    // Fungsi untuk menampilkan halaman FAQ

    public function index() {
        $this->load->view('partials/header');
        $this->load->view('katalog');
        $this->load->view('partials/footer'); 
    }


}


 