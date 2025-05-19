<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_ketersediaan_kamar() {
        $query = $this->db->get('ketersediaan_kamar');
        $result = array();
        foreach ($query->result_array() as $row) {
            $result[$row['kost_id']] = $row;
        }
        return $result;
    }

    public function get_pendaftar() {
        return $this->db->get('pendaftaran_kost')->result_array();
    }

    public function get_pendaftar_by_id($id) {
        return $this->db->get_where('pendaftaran_kost', array('id' => $id))->row_array();
    }

    public function hapus_pendaftar($id) {
        return $this->db->delete('pendaftaran_kost', array('id' => $id));
    }

    public function update_pendaftar($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('pendaftaran_kost', $data);
    }

    public function update_ketersediaan_kamar($kost_id, $kamar_tersedia) {
        // Cek apakah data sudah ada
        $this->db->where('kost_id', $kost_id);
        $query = $this->db->get('ketersediaan_kamar');
        
        if ($query->num_rows() > 0) {
            // Update data yang sudah ada
            $this->db->where('kost_id', $kost_id);
            return $this->db->update('ketersediaan_kamar', array('kamar_tersedia' => $kamar_tersedia));
        } else {
            // Insert data baru
            return $this->db->insert('ketersediaan_kamar', array(
                'kost_id' => $kost_id,
                'kamar_tersedia' => $kamar_tersedia
            ));
        }
    }
}