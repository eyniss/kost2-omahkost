<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @property Pendaftaran_model $Pendaftaran_model
 * @property CI_Input $input
 * @property CI_Form_validation $form_validation
 **/
class Pendaftaran extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Pendaftaran_model');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function index() {
        $this->load->view('form_pendaftaran');
    }

    public function proses() {
        // Validasi form
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat Asal', 'required');
        $this->form_validation->set_rules('nik', 'NIK', 'required|numeric');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('no_hp', 'Nomor HP', 'required|numeric');
        $this->form_validation->set_rules('tipe_kost', 'Tipe Kos', 'required');
        $this->form_validation->set_rules('tanggal_penempatan', 'Tanggal Penempatan', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, tampilkan kembali form dengan error
            $this->load->view('form_pendaftaran');
        } else {
            // Jika validasi berhasil, proses data
            $data = array(
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'nik' => $this->input->post('nik'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'no_hp' => $this->input->post('no_hp'),
                'tipe_kost' => $this->input->post('tipe_kost'),
                'tanggal_penempatan' => $this->input->post('tanggal_penempatan'),
                'tanggal_daftar' => date('Y-m-d H:i:s')
            );

            $this->Pendaftaran_model->simpan_pendaftaran($data);
            
            // Redirect ke halaman sukses atau tampilkan pesan
            redirect('pendaftaran/sukses');
        }
    }

    public function sukses() {
      
    $data['whatsapp_link'] = "https://wa.me/6281223260616";
    $this->load->view('konfirmasi_view', $data);
    }
}