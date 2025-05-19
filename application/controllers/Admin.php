<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * @property Admin_model $Admin_model
 * @property CI_Input $input
 * @property CI_Session $session
 * @property CI_Form_validation $form_validation
 *  @property CI_Router $router
 **/


class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library('session');
    }

    public function index() {
        $data['pendaftars'] = $this->Admin_model->get_pendaftar();
        $data['kamars'] = $this->Admin_model->get_ketersediaan_kamar();

        // Jika edit data
        if ($this->input->get('action') == 'edit' && $this->input->get('id')) {
            $id = $this->input->get('id');
            $data['pendaftar_edit'] = $this->Admin_model->get_pendaftar_by_id($id);
        }

        $this->load->view('admin/dashboard_view', $data);
    }

    public function update() {
        $id = $this->input->post('id');
        $data = array(
            'nama' => $this->input->post('nama'),
            'nik' => $this->input->post('nik'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'no_hp' => $this->input->post('no_hp'),
            'alamat' => $this->input->post('alamat'),
            'tipe_kost' => $this->input->post('tipe_kost'),
            'tanggal_penempatan' => $this->input->post('tanggal_penempatan')
        );

        if ($this->Admin_model->update_pendaftar($id, $data)) {
            $this->session->set_flashdata('success_message', 'Data pendaftar berhasil diupdate');
        } else {
            $this->session->set_flashdata('error_message', 'Gagal mengupdate data');
        }
        redirect('admin');
    }

    public function hapus($id) {
        if ($this->Admin_model->hapus_pendaftar($id)) {
            $this->session->set_flashdata('success_message', 'Data pendaftar berhasil dihapus');
        } else {
            $this->session->set_flashdata('error_message', 'Gagal menghapus data');
        }
        redirect('admin');
    }

    public function update_kamar() {
        $kost_id = $this->input->post('kost_id');
        $kamar_tersedia = $this->input->post('kamar_tersedia');

        if ($this->Admin_model->update_ketersediaan_kamar($kost_id, $kamar_tersedia)) {
            $this->session->set_flashdata('success_message', 'Ketersediaan kamar berhasil diperbarui');
        } else {
            $this->session->set_flashdata('error_message', 'Gagal memperbarui ketersediaan kamar');
        }
        redirect('admin');
    }
}