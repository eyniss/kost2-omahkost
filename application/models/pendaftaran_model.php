<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function simpan_pendaftaran($data) {
        return $this->db->insert('pendaftaran_kost', $data);
    }
}