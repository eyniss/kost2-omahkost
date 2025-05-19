<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class katalogkost extends CI_Controller {

    public function katalog1() {
        // Meload file views/katalog1.php
        
        $this->load->view('katalog1');
    }
    public function katalog2() {
    $this->load->view('katalog2');
}
    public function katalog3() {
    $this->load->view('katalog3');
}

}
