<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller{
  function  __construct()
  {
      parent::__construct();
      $this->load->library('form_validation');
      $this->load->helper('form');
      $this->load->model('dashboard/M_dashboard');

  }

  public function index()
  {
      $data['title'] = 'Info Corona Papua | Live Data Indonesia & Papua';
      $data['suspect'] = $this->M_dashboard->rekap_suspect();
      $data['prosentase'] = $this->M_dashboard->prosentase_suspect();
      $data['datasuspect'] = $this->db->query("SELECT * FROM v_suspect ")->result();

      $this->template->load('frontend_site','home',$data);
  }
}