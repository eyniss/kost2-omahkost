<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * @property Admin_model $Admin_model
 * @property CI_Input $input
 * @property CI_Session $session
 * @property CI_Form_validation $form_validation
 *  @property CI_Router $router
 **/
class Coba extends CI_Controller
{
  public function index()
  {
    $this->load->model('Admin_model');
    $data['kamars'] = $this->Admin_model->get_ketersediaan_kamar();
    $data['pendaftars'] = $this->Admin_model->get_pendaftar();
    $data['pendaftar_edit'] = null;
    $this->load->view('Admin/dashboard_view', $data);
  }
}
