<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Appointment extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('sedes_model');
    $this->load->model('categoriaServicios_model');
  }

  public function index()
  {
    $reply = $this->sedes_model->findSedes();
    $servicios = $this->categoriaServicios_model->getCategoriasServicios();

    $frontData['getSedes'] = $reply;
    $frontData['getServicios'] = $servicios;
    if ($this->session->userdata('login')) {
      $this->load->view('/pages/appoitment', $frontData);
    } else {
      $this->load->view('/pages/appoitment', $frontData);
    }
  }
}
