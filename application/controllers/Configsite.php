<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Configsite extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    if ($this->session->userdata('login') && $this->session->userdata('user_type') == 'Administrador') {
      $this->load->view('/pages/admin/index');
    } else {
      redirect(site_url("principal"));
    }
  }

}